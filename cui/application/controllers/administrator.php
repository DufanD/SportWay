<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('admin');
	}

	public function index(){
		$this->cek_login();
		$data['user'] = $this->admin->count('pelanggan');
		$data['item'] = $this->admin->count('produk');
		$data['trans'] = $this->admin->count_where('pembelian', ['status' => 'proses']);
		$data['last'] = $this->admin->last('pembelian pb JOIN pelanggan pl ON (pb.id_pelanggan = pl.id_pelanggan)', 3, 'id_pembelian');
		
		$this->template->admin('admin/home', $data);
	}

	public function update_profil(){
		$this->cek_login();

		if($this->input->post('submit') == 'Submit'){
			$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]');
			$this->form_validation->set_rules('fullname', 'Fullname', "required|trim|min_length[3]|regex_match[/^[a-z A-Z.']+$/]");
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() == TRUE){
				$get_data = $this->admin->get_where('admin', array('id_admin' => $this->session->userdata('admin')))->row();
				if($this->input->post('password') != $get_data->password){
					echo '<script type"text/javascript">alert("Password Salah");</script>';
				} else {
					$data = array(
						'username' => $this->input->post('username', TRUE),
						'nama_lengkap' => $this->input->post('fullname', TRUE),
					);

					$cond = array('id_admin' => $this->session->userdata('admin'));

					$this->admin->update('admin', $data, $cond);
					echo '<script type"text/javascript">alert("Update Berhasil");</script>';
					redirect('administrator');
				}
			}
		}
		$get = $this->admin->get_where('admin', array('id_admin' => $this->session->userdata('admin')))->row();
		$data['username'] = $get->username;
		$data['fullname'] = $get->nama_lengkap;
		
		$this->template->admin('admin/edit_profil', $data);
	}

	public function cek_login(){
		if(!$this->session->userdata('admin')){
			redirect('loginadm');
		}
	}

}
?>