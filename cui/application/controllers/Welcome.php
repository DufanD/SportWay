<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
        $data =$this->mymodel->GetAllProduk();
		$this->load->view('index',array('data' => $data));
	}
}
