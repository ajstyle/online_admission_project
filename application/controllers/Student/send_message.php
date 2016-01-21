<?php
class send_message extends CI_Controller
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
      
  $name = $this->input->post('name');
         $mail = $this->input->post('mail');
         $comment = $this->input->post('comment');
            echo $name ;   
            echo $mail ; 
             echo $comment ; 

       
    
      $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'amitjain.lov@gmail.com';
       
        $config['smtp_pass']    = 'amit1992';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not   
        $config['mail_path'] = 'ssl://smtp.gmail.com' ;  

        $this->email->initialize($config);

          $this->email->from('amitjain.lov@gmail.com','amit');
        $this->email->to('masterofcomputer2014@gmail.com'); 

        $this->email->subject(' University Admission ');
         
            $MESSAGE_BODY = "Your Registration id is     "; 
$MESSAGE_BODY .= "For further enquiry save to  Registration id "; 
$MESSAGE_BODY .= "and Login with Reg_id and Date of Birth "; 

        $this->email->message($MESSAGE_BODY);  

        $this->email->send();

        echo $this->email->print_debugger();

      
    }
  }


   ?>
