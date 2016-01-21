<?php
class notification extends CI_Controller
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
       $Email_id = $this->input->post('Email_id');
    echo $Email_id ; 
      $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'masterofcomputer2014@gmail.com';
        $config['smtp_pass']    = 'mlsu2014';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);
          $this->email->from('masterofcomputer2014@gmail.com', 'University Computer Center');
        $this->email->to('amitjain.lov@gmail.com'); 

        $this->email->subject(' University Admission ');
        $message = "Thanks for signing up! Your account has been created, you can login with your credentials after you have activated your account by pressing the url below. Please click this link to activate your account:<a href='.base_url('user/verify').'/>Click Here</a>"; 

        $this->email->message($message);  

        $this->email->send();

        echo $this->email->print_debugger();
        
redirect("admin/dashboard");
}
}
?>