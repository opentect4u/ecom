<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkouts extends CI_Controller {

	public function __construct(){

        parent::__construct();

        //For Individual Functions
        $this->load->model('Checkout');

    }

	public function index() {

        if($this->session->userdata('ecmo-loggedin')){

			$data['addresses'] = $this->Checkout->f_get_particulars('md_user_addresses', NULL, array('user_id' => $this->session->userdata('ecmo-loggedin')->user_id), 0);

			$this->load->view('checkouts', $data);

		}
		else{

			$this->load->view('checkouts');
			
		}

		$this->load->view('footer');

	}

	public function addtocart(){

		$maxCode = $this->Checkout->f_get_particulars('td_cart', array('(ifnull(MAX(id), 0) + 1) max_cd'), array("user_id" => $this->session->userdata('ecmo-loggedin')->user_id), 1)->max_cd;
		
		$data_array = array(
			"user_id" => $this->session->userdata('ecmo-loggedin')->user_id,
			"category_id" => $this->input->post('prodId'),
			"prod_id" => $this->input->post('prodId'),
			"id" => $maxCode
		);

		$this->Checkout->f_insert('td_cart', $data_array);

		exit;
		
	}

	public function viewcart(){

		if($this->session->userdata('ecmo-loggedin')){

			$data['viewcart'] = $this->Checkout->f_get_particulars('td_cart', NULL, array('user_id' => $this->session->userdata('ecmo-loggedin')->user_id), 0);

			$this->load->view('viewcart', $data);

		}
		else{

			$this->load->view('viewcart');
			
		}

		$this->load->view('footer');
	}
}
