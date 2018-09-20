<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('cart'));
		$this->load->model('admin');
	}
		
	// Ini controller checkout

	public function index()
	{
		if(!$this->session->userdata('username') || !$this->cart->contents()){
			redirect('web');
		}

		if($this->input->post('chek', TRUE) == 'Submit'){
			$this->form_validation->set_rules('prov', 'Provinsi', 'required');
			$this->form_validation->set_rules('kota', 'Kota / Kabupaten', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('kd_pos', 'Kode Pos', 'required|numeric|min_length[5]');
			$this->form_validation->set_rules('kurir', 'Kurir', 'required');
			$this->form_validation->set_rules('layanan', 'Layanan', 'required');
			// $this->form_validation->set_rules('ongkir', 'Ongkir', 'required|numeric');
			// $this->form_validation->set_rules('total', 'Total', 'required|numeric');

			if($this->form_validation->run() == TRUE){
				$get = $this->admin->get_where('pelanggan', array('id_pelanggan' => $this->session->userdata('user_id')));

				if($get->num_rows() > 0){
					//proses
					$user = $get->row();

					$id_order = time();
					$kota = explode(",", $this->input->post('kota', TRUE));
					$alamat = $this->input->post('alamat', TRUE);
					$pos = $this->input->post('kd_pos', TRUE);
					$kurir = $this->input->post('kurir', TRUE);
					$layanan = explode(",", $this->input->post('layanan', TRUE));
					$ongkir = $this->input->post('ongkir', TRUE);
					$total = $this->input->post('total', TRUE);
					$tgl_pesan = date("Y-m-d");
					$bts = date("Y-m-d", mktime(0,0,0, date("m"), date("d") + 3, date("Y")));
					
					$data = array(
						'id_pembelian' => $id_order,
						'id_pelanggan' => $user->id_pelanggan,
						'total_pembelian' => $total,
						'tujuan' => $alamat,
						'pos' => $pos,
						'kota' => $kota[1],
						'kurir' => $kurir,
						'service' => $layanan[1],
						'tanggal_pembelian' => $tgl_pesan,
						'bts_pembelian' => $bts,
						'status' => 'belum'
					);

					$this->admin->insert('pembelian', $data);
						foreach($this->cart->contents() as $key){
							$detail = array(
								'id_pembelian' => $id_order,
								'id_produk' => $key['id'],
								'jumlah' => $key['qty'],
								'biaya' => $key['subtotal']
							);

							$this->admin->insert('pembelian_produk', $detail);
						}

						$this->cart->destroy();

						echo '<script type="text/javascript">alert("Terima kasih telah membeli produk kami, silahkan cek transaksi untuk detail pembayaran...");window.location.replace("'.base_url().'")</script>';

				} else {
					echo '<script type="text/javascript">alert("User tidak dikenal...");</script>';
				}
			}
		}

		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);
		$this->load->view('checkout',$comp);
	}

	public function city(){
		$prov = $this->input->post('prov', TRUE);
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$prov",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: 39a6cbff2160c0abc0a7e4773740e3a0"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  $data = json_decode($response, TRUE);

		  echo '<option value="" selected disabled>Kota / Kabupaten</option>';
		  for($i=0; $i < count($data['rajaongkir']['results']); $i++){
		    echo '<option value="'.$data['rajaongkir']['results'][$i]['city_id'].','.$data['rajaongkir']['results'][$i]['city_name'].'">'.$data['rajaongkir']['results'][$i]['city_name'].'</option>';
		  }
		}
	}

	public function getCost(){
		$asal = 444;
		$dest = $this->input->post('dest', TRUE);
		$kurir = $this->input->post('kurir', TRUE);
		$berat = 0;

		foreach ($this->cart->contents() as $key) {
			$berat += ($key['weight'] * $key['qty']);
		}

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=$asal&destination=$dest&weight=$berat&courier=$kurir",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: 39a6cbff2160c0abc0a7e4773740e3a0"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  $data = json_decode($response, TRUE);

		  echo '<option value="" selected disabled>Layanan yang tersedia</option>';

		  for($i=0; $i < count($data['rajaongkir']['results']); $i++){
		  	for($j=0; $j < count($data['rajaongkir']['results'][$i]['costs']); $j++){
			    echo '<option value="'.$data['rajaongkir']['results'][$i]['costs'][$j]['cost'][0]['value'].','.$data['rajaongkir']['results'][$i]['costs'][$j]['service'].'('.$data['rajaongkir']['results'][$i]['costs'][$j]['description'].')">';
			    echo $data['rajaongkir']['results'][$i]['costs'][$j]['service'].'('.$data['rajaongkir']['results'][$i]['costs'][$j]['description'].')</option>';
			}
		  }
		}
	}

	public function cost(){
		$biaya = explode(",", $this->input->post('layanan', TRUE));
		$total = $this->cart->total() + $biaya[0];

		echo $biaya[0].','.$total;
	}
}
