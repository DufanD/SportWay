<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {	
	// Ini Constructor

	public function __construct(){
		parent::__construct();
		$this->load->library(array('cart'));
		$this->load->model('mymodel');
	}

	// Ini Fungsi Login

	public function login(){
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);

		if(isset($_POST['submit'])){
			$email 		= $this->input->post('Email');
			$password 	= $this->input->post('Password');
			$hasil		= $this->mymodel->login($email,$password);
			if($hasil!=0){
				foreach ($hasil as $hsl) {
					$this->session->set_userdata(array(
						'user_id' => $hsl['id_pelanggan'],
						'username' => $hsl['nama_pelanggan']
					));
				}	
					redirect('checkout');
			}else{
				redirect('auth/login');
			}
		}else{
			$this->load->view('login',$comp);	
		}
	}

	// Ini Fungsi Logout

	public function logout(){
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('web');
	}

	// Ini Fungsi Register 

	public function register(){
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);

		if(isset($_POST['register'])){
			$this->form_validation->set_rules('password', 'Password', 'min_length[6]');
			$this->form_validation->set_rules('Confirm_Password', 'Confirm Password', 'matches[password]');
			if($this->form_validation->run() == TRUE){
				$name 		= $this->input->post('Username');
				$phone 		= $this->input->post('Phone');
				$email 		= $this->input->post('Email');
				$password 	= $this->input->post('password');
				$cek = $this->mymodel->GetPelanggan($name,$phone,$email,$password);
				if(count($cek) < 1){
					$this->mymodel->register($name,$phone,$email,$password);
					$this->session->set_flashdata("success", "Your account has been registered. You can login now");
					redirect('auth/register', 'refresh');
				} else {
					$this->session->set_flashdata("failed", "The account has been exist");
					redirect('auth/register', 'refresh');
				}
			} else {
				$this->load->view('register',$comp);
			}
		}else{
			$this->load->view('register',$comp);	
		}
	}
}
?>