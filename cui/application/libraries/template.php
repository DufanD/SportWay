<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
	function __construct(){
		$this->ci =&get_instance();
	}

	function admin($template, $data=''){
		$comp = array(
			"content" => $this->ci->load->view($template, $data, TRUE),
			"nav" => $this->ci->load->view('admin/nav', $data, TRUE),
		);

		$this->ci->load->view('admin/dashboard', $comp);
	}
}
?>