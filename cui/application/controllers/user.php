<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('admin');
	}

	public function index(){
		$this->cek_login();
		$data['data'] = $this->admin->get_all('pelanggan');

		$this->template->admin('admin/manage_user', $data);
		
	}

	public function cek_login(){
		if(!$this->session->userdata('admin')){
			redirect('loginadm');
		}
	}
}
?>