<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	public function __construct(){

        parent::__construct();

        //For Individual Functions
        $this->load->model('Item');

	}
	
	public function index() {
		
		$this->load->view('header');
		
		$data['catgId'] = $this->Item->f_get_particulars('md_category', array('catg_id'), array('catg_desc' => $this->uri->segment(1)), 1)->catg_id;
		$data['prodId'] = $this->uri->segment(3);
		$this->load->view('items', $data);
		$this->load->view('footer');
	}
}