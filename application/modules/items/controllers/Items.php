<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
		$data['prodId'] = $this->uri->segment(3);
		$this->load->view('items', $data);
		$this->load->view('footer');
	}
}
