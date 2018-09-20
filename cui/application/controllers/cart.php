<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('admin');
	}

	public function index(){
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);
		$this->load->view('cart',$comp);
	}

	public function add(){
		if(is_numeric($this->uri->segment(3))){
			$id = $this->uri->segment(3);
			$get = $this->admin->get_where('produk', array('id_produk' => $id))->row();
			$data = array(
				'id' => $get->id_produk,
				'rowid' => $get->id_produk,
				'name' => $get->nama_produk,
				'price' => $get->harga_produk,
				'weight' => $get->berat_produk,
				'foto' => $get->foto_produk,
				'qty' => 1
			);

			$this->cart->insert($data);

			echo '<script type="text/javascript">window.history.go(-1).reload();</script>';
		} else {
			redirect('web');
		}
	}

	public function update(){
		if($this->uri->segment(3)){
			$id = $this->uri->segment(3);
			$data = array(
				'rowid' => $id,
				'qty' => $this->input->post('qty', TRUE),
			);

			$this->cart->update($data);

			redirect('cart');
		} else {
			redirect('cart');
		}	
	}

	public function delete(){
		if($this->uri->segment(3)){
			$rowid = $this->uri->segment(3);

			$this->cart->remove($rowid);

			redirect('cart');
		} else {
			redirect('cart');
		}	
	}
}

?>