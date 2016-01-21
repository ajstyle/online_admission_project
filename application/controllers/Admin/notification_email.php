<?php
class notification_email extends CI_Controller
{ 


    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ;
        $this->load->helper('form') ; 
 $this->load->helper('array');
 
 $this->load->library('email');
  
    }

    public function index()
    {
    	$this->load->view('admin/include/header_view');
         $this->load->view('admin/notification_view');
         
    }
}