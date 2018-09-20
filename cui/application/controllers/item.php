<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('admin');
	}

	public function index(){
		$this->cek_login();
		$data['data'] = $this->admin->get_all('produk');

		$this->template->admin('admin/manage_item', $data);
		
	}

	public function cek_login(){
		if(!$this->session->userdata('admin')){
			redirect('loginadm');
		}
	}

	public function add_item(){
		if($this->input->post('submit',TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('nama', 'Nama Produk', 'required|min_length[4]');
			$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
			$this->form_validation->set_rules('berat', 'Berat Produk', 'required|numeric');
			$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required');
			$this->form_validation->set_rules('desk', 'Deskripsi', 'required|min_length[4]');

			if($this->form_validation->run() == TRUE){
				$config['upload_path'] = './foto_produk/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;

				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto')){
					$gbr = $this->upload->data();
					//proses insert
					$items = array(
						"nama_produk" => $this->input->post('nama', TRUE),
						"harga_produk" => $this->input->post('harga', TRUE),
						"berat_produk" => $this->input->post('berat', TRUE),
						"jenis_produk" => $this->input->post('jenis', TRUE),
						"deskripsi_produk" => $this->input->post('desk', TRUE),
						"foto_produk" => $gbr['file_name'],
					);

					$this->admin->insert('produk', $items);
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				} else {
					$this->session->set_flashdata('alert', 'Anda Belum Memilih Foto');
				}
				
			}
		}
		$data['nama'] = $this->input->post('nama', TRUE);
		$data['berat'] = $this->input->post('berat', TRUE);
		$data['harga'] = $this->input->post('harga', TRUE);
		$data['jenis'] = $this->input->post('jenis', TRUE);
		$data['desk'] = $this->input->post('desk', TRUE);
		$data['header'] = "Add New Product";

		$this->template->admin('admin/item_form', $data);
	}

	public function detail(){
		$id_item = $this->uri->segment(3);
		$item = $this->admin->get_where('produk', array('id_produk' => $id_item));

		foreach ($item->result() as $key) {
			$data['id_produk'] = $key->id_produk;
			$data['nama_produk'] = $key->nama_produk;
			$data['harga_produk'] = $key->harga_produk;
			$data['berat_produk'] = $key->berat_produk;
			$data['jenis_produk'] = $key->jenis_produk;
			$data['gambar'] = $key->foto_produk;
			$data['deskripsi_produk'] = $key->deskripsi_produk;
		}
		$this->template->admin('admin/detail_item', $data);
	}

	public function update_item(){
		$id_item = $this->uri->segment(3);

		if($this->input->post('submit',TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('nama', 'Nama Produk', 'required|min_length[4]');
			$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
			$this->form_validation->set_rules('berat', 'Berat Produk', 'required|numeric');
			$this->form_validation->set_rules('jenis', 'Jenis Produk', 'required');
			$this->form_validation->set_rules('desk', 'Deskripsi', 'required|min_length[4]');

			if($this->form_validation->run() == TRUE){
				$config['upload_path'] = './foto_produk/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 2048;

				$this->load->library('upload', $config);

				$items = array(
						"nama_produk" => $this->input->post('nama', TRUE),
						"harga_produk" => $this->input->post('harga', TRUE),
						"berat_produk" => $this->input->post('berat', TRUE),
						"jenis_produk" => $this->input->post('jenis', TRUE),
						"deskripsi_produk" => $this->input->post('desk', TRUE),
				);
				if($this->upload->do_upload('foto')){
					$gbr = $this->upload->data();
					//proses update
					unlink('foto_produk/'.$this->input->post('old_pict', TRUE));
					$items['foto_produk'] = $gbr['file_name'];
					
					$this->admin->update('produk', $items, array('id_produk' => $id_item));
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				} else {
					$this->admin->update('produk', $items, array('id_produk' => $id_item));
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				
			}
			redirect('item');
		}

		$item = $this->admin->get_where('produk', array('id_produk' => $id_item));

		foreach ($item->result() as $key) {
			$data['nama'] = $key->nama_produk;
			$data['harga'] = $key->harga_produk;
			$data['berat'] = $key->berat_produk;
			$data['jenis'] = $key->jenis_produk;
			$data['gambar'] = $key->foto_produk;
			$data['desk'] = $key->deskripsi_produk;
		}

		$data['header'] = "Update Data Product";

		$this->template->admin('admin/item_form', $data);
	}

	public function delete_item(){
		$id_item = $this->uri->segment(3);
		$item = $this->admin->get_where('produk', array('id_produk' => $id_item));
		unlink('foto_produk/'.$item->result()->foto_produk);
		$this->admin->delete('produk', array('id_produk' => $id_item));
		redirect('item');
	}
}
?>