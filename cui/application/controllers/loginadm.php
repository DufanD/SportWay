<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadm extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin');
	}

	public function index(){
		if($this->input->post('submit',TRUE) == 'Submit'){
			$user = $this->input->post('user', TRUE);
			$pass = $this->input->post('pass', TRUE);

			$cek = $this->admin->get_where('admin', array('username' => $user));

			if($cek->num_rows()>0){
				$data = $cek->row();
				if($pass == $data->password){
					$datauser = array(
						'admin' => $data->id_admin,
						'user' => $data->fullname,
						'login' => TRUE
					);
					$this->session->set_userdata($datauser);
					redirect('administrator');
				} else {
					$this->session->set_flashdata('alert', 'Password yang Anda masukkan salah..');
				}
			} else {
				$this->session->set_flashdata('alert', 'Username Ditolak');
			}
		}
		if($this->session->userdata('login') == TRUE){
			redirect('administrator');
		}
		$this->load->view('admin/login_form');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('loginadm');
	}
}
?>