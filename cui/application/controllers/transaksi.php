<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('admin');
	}

	public function index(){
		if(!$this->session->userdata('username')){
			redirect('web');
		}

		$comp['get'] = $this->admin->get_where('pembelian', array('id_pelanggan' => $this->session->userdata('user_id')));
		$comp['header'] = $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true);
		$comp['footer'] = $this->load->view("footer",array(),true);

		$this->load->view('trans1',$comp);
	}

	public function detail_trans(){
		if(!is_numeric($this->uri->segment(3))){
			redirect('web');
		}

		$table = "pembelian pb JOIN pembelian_produk pp ON (pb.id_pembelian = pp.id_pembelian) JOIN produk pr ON (pp.id_produk = pr.id_produk)";

		$comp['get'] = $this->admin->get_where($table, array('pb.id_pembelian' => $this->uri->segment(3)));
		$comp['header'] = $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true);
		$comp['footer'] = $this->load->view("footer",array(),true);

		$this->load->view('detail1',$comp);	
	}

	public function delete_trans(){
		if(!is_numeric($this->uri->segment(3))){
			redirect('web');
		}

		$table = array('pembelian', 'pembelian_produk');
		$this->admin->delete($table, array('id_pembelian' => $this->uri->segment(3)));
		redirect('transaksi');
	}
}

?>