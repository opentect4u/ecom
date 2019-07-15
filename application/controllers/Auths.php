<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auths extends CI_Controller {
	
	public function __construct(){

        parent::__construct();

        //For Individual Functions
        $this->load->model('Auth');

	}
	
	public function index() {
		
		$data['products'] = $this->Auth->f_get_products();
		
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
