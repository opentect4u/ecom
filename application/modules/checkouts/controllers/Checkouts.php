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
}
