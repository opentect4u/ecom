<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function __construct(){
        
        parent::__construct();

        $this->load->model('Login');
        
    }

	public function index()
	{
		$this->load->view('form');
	}

	public function f_login(){

		if ($_SERVER['REQUEST_METHOD'] === 'POST'){

			if($pass = $this->Login->f_get_particulars("md_users", array('password'), array("user_id" => $this->input->post('user_id')), 1)) {

			    if(password_verify($this->input->post('password'), $pass->password)){

                    //User Information
                    $select =   array(

                        "user_id", "user_name"

                    );

                    $where  =   array(
                        
                        "user_id"                 =>  $this->input->post('user_id'),
                        
                        "user_status"             =>  'A'
                    );
                
                    $user_data = $this->Login->f_get_particulars("md_users", $select, $where, 1);
                    
                    //Setting Session Value for audit_trail
                    $this->session->set_userdata('ecmo-loggedin', $user_data);
					
					redirect($this->session->userdata('cur_url'));
					
                }
                else{

                    //Setting Messages
                    $message    =   array( 
                            
                        'message'   => 'Ivalid Password!',
                        
                        'status'    => 'danger'
                        
                    );

                    $this->session->set_flashdata('msg', $message);
	
					redirect($this->session->userdata('cur_url'));
                    
                }

			}
			else{

                //Setting Messages
                $message    =   array( 
                        
                    'message'   => 'Ivalid User!',
                    
                    'status'    => 'danger'
                    
                );

                $this->session->set_flashdata('msg', $message);

				redirect($this->session->userdata('cur_url'));
			}

        }
	}

	public function f_logout(){

        if($this->session->userdata('ecmo-loggedin')){

            $this->session->unset_userdata('ecmo-loggedin');

            redirect(site_url());

        }else{

            redirect(site_url());

        }
           
    }

}
