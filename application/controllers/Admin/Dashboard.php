<?php
class Dashboard extends CI_Controller
{

    public function __construct() {
        parent::__construct();
    
        $user_id = $this->session->userdata('user_id');
       
        if(!$user_id)
        {
        
            $this->logout() ; 
        }
      
     
    }

        public function index()
              
      {
           
          
          $this->load->view('admin/include/header_view');
          $this->load->view('admin/dashboard_view');
          $this->load->view('admin/include/footer_view');
              
          
      }
    
    
      public function logout()
      {
          $this->session->sess_destroy(); 
          redirect('Admin/login');
      }

      
      
      
      
      
      }