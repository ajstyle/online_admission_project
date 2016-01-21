<?php

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view("Admin/include/header_view"); 
        
        $this->load->view("Admin/login_view"); 
        
       
        $this->load->view("Admin/include/footer_view"); 
    }
    
    
           

    public function check()
            

    {
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        
      $query =   $this->db->select('user_id, password')->get_where('admin_login',['user_id'=>$username,'password'=>$password]);
     
      if($query->result()!=NULL)
    {
           $this->session->set_userdata([
            'user_id' =>  'admin'
        ]);
    
        $session = $this->session->all_userdata() ; 
      redirect("admin\dashboard");
    }
    
 else 
     {  
      $this->session->mark_as_flash('item');
             $_SESSION['item'] = 'Incorrect Username and Password';
           
        redirect("admin\login");
        
     }
    
   
    
    
    
    }
  }
  
