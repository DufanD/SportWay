<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transadm extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('admin');
	}

	public function index(){
		$this->cek_login();
		$select = ['id_pembelian', 'tanggal_pembelian', 'bts_pembelian', 'nama_pelanggan', 'pb.status AS status'];
		$table = "pembelian pb JOIN pelanggan pl ON (pb.id_pelanggan = pl.id_pelanggan)";

		$data['data'] = $this->admin->select_all($select, $table);

		$this->template->admin('admin/transaksi', $data);
	}

	public function konfirmasi(){
		$this->cek_login();

		if(!is_numeric($this->uri->segment(3))){
			redirect('transadm');
		}

		$this->admin->update('pembelian', ['status' => 'proses'], ['id_pembelian' => $this->uri->segment(3)]);

		redirect('transadm');
	}

	public function detail_trans(){
		$this->cek_login();

		if(!is_numeric($this->uri->segment(3))){
			redirect('transadm');
		}

		$select = ['pb.id_pembelian AS id_pembelian', 'tanggal_pembelian', 'bts_pembelian', 'nama_pelanggan', 'pb.status AS status', 'pos', 'service', 'kota', 'tujuan', 'total_pembelian', 'biaya', 'kurir', 'nama_produk', 'jumlah'];
		$table = "pembelian pb JOIN pembelian_produk pp ON (pb.id_pembelian = pp.id_pembelian) JOIN pelanggan pl ON (pb.id_pelanggan = pl.id_pelanggan) JOIN produk pr ON (pr.id_produk = pp.id_produk)";
		$data['data'] = $this->admin->select_where($select, $table, array('pb.id_pembelian' => $this->uri->segment(3)));

		$this->template->admin('admin/detail_transaksi', $data);
	}

	public function delete_trans(){
		$this->cek_login();

		if(!is_numeric($this->uri->segment(3))){
			redirect('transadm');
		}

		$this->admin->delete(['pembelian', 'pembelian_produk'], ['id_pembelian' => $this->uri->segment(3)]);

		redirect('transadm');
	}

	public function report(){
		$this->cek_login();

		if($this->input->post('submit', TRUE) == 'Submit'){
			$this->form_validation->set_rules('bln', 'Bulan', 'required|numeric');
			$this->form_validation->set_rules('thn', 'Tahun', 'required|numeric');
			
			if($this->form_validation->run() == TRUE){
				$bln = $this->input->post('bln', TRUE);
				$thn = $this->input->post('thn', TRUE);

			}
		} else {
			$bln = date('m');
			$thn = date('Y');
		}
		//YYY-mm-dd
		$awal = $thn.'-'.$bln.'-01';
		$akhir = $thn.'-'.$bln.'-31';
		$where = ['tanggal_pembelian >=' => $awal, 'tanggal_pembelian <=' => $akhir, 'pb.status' => 'proses'];
		$data['data'] = $this->admin->report($where);
		$data['bln'] = $bln;
		$data['thn'] = $thn;
		$this->template->admin('admin/laporan', $data);	
	}

	public function cetak(){
		$this->cek_login();

		if(!is_numeric($this->uri->segment(3)) ||  !is_numeric($this->uri->segment(4))){
			redirect('transadm');
		}

		$bln = $this->uri->segment(3);
		$thn = $this->uri->segment(4);

		$awal = $thn.'-'.$bln.'-01';
		$akhir = $thn.'-'.$bln.'-31';
		$where = ['tanggal_pembelian >=' => $awal, 'tanggal_pembelian <=' => $akhir, 'pb.status' => 'proses'];
		$data['data'] = $this->admin->report($where);
		$data['bln'] = $bln;
		$data['thn'] = $thn;
		$this->load->view('admin/cetak', $data);	
	}

	public function cek_login(){
		if(!$this->session->userdata('admin')){
			redirect('loginadm');
		}
	}
}

?>