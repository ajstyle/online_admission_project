<?php
class Notification extends CI_Controller
{ 

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ;
        $this->load->helper('form') ; 
 $this->load->helper('array');
  
    }

 

  
        public function index()
              
      {
           
          
          $this->load->view('admin/include/header_view');
          $this->load->view('student/notification_view');
          
              
          
      }
    
    }