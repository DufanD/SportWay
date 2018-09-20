<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('admin');
	}

	public function about(){
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);
		$this->load->view('about',$comp);
	}

	public function contact(){
		$comp = array(
			"header" => $this->load->view("header",array(
				"navbar_top" => $this->load->view("navbar_top",array(),true)
			),true),
			"footer" => $this->load->view("footer",array(),true),
		);
		$this->load->view('contact',$comp);
	}	
}

?>