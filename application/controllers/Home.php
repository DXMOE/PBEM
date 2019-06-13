<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    $this->load->database();
        $this->load->helper('url');
         $this->load->library('form_validation');
    }
    
  
    public function index()
	{
            $data = array(
                
                        'eg_catalago' => $this->home_model->get_eg_catalago()
            );
            
        $this->load->view('home',$data);
	}
}
