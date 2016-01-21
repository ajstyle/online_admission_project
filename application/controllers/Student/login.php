<?php

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view("Admin/include/header_view"); 
        
     $this->load->view('student/login_view');
        $this->load->view("Admin/include/footer_view"); 
     $this->load->library('session');
    }
    


    
      
 
   public function check()
            

    {
    	 $this->load->view("Admin/include/header_view"); 
        $Reg_id = $this->input->post('Reg_id');
        $DOB = $this->input->post('DOB');
     
    
       
       $query = $this->db->select('*')
                ->where('Reg_id', $Reg_id)
                ->where('DOB', $DOB)
                ->get('student_info');
      
     
 



      if($query->result()!=NULL)

    {
           $this->session->set_userdata([
            'Reg_id' =>  $Reg_id

        ]);
    
        $session = $this->session->all_userdata() ; 
          redirect('student/dashboard'); 
    }
   
 
             
        else     //$error = array('error' =>' Invalid Username and Password </div>');
        // $this->load->view('student/login_view', array('error' => '$errror'));
        {
        	
             $this->session->mark_as_flash('item');
             $_SESSION['item'] = 'Incorrect Username and Password';
        	
            redirect('student/login');
        	
        }
          
     
   
    
    }
}
    
 





      ?>