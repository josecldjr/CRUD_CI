<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
 
	public function index()
	{
		$this->load->view('template/html_header');
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
		$this->load->view('template/html_footer');
	}

	
}
