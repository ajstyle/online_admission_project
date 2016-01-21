<?php
class Dashboard extends CI_Controller
{

    public function __construct() {
        parent::__construct();
    
        $user_id = $this->session->userdata('Reg_id');
       
        if(!$user_id)
        {
        
            $this->logout() ; 
        }
           

    }

        public function index()
              
      {
           
          
          $this->load->view('admin/include/header_view');
          $this->load->view('student/dashboard_view');
          
          
      }
    
    
      public function logout()
      {
          $this->session->sess_destroy(); 
          redirect('student/login');
      }

      
      
      
      
      
      }