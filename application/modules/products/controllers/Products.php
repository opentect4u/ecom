<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){

        parent::__construct();

        //For Individual Functions
        $this->load->model('Product');

	}

	public function index()
	{
		$data['products'] = $this->Product->f_get_products($this->uri->segment(1), $this->uri->segment(2));
		$this->load->view('header');
		$this->load->view('products', $data);
		$this->load->view('footer');
	}
}
