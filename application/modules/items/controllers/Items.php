<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('items');
		$this->load->view('footer');
	}
}
