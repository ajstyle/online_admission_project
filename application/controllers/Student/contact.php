<?php
class contact extends CI_Controller
{ 

    public function __construct()
    {
        parent::__construct();
       $this->load->helper('form') ; 
  
    }
 

  public function index()
  {
      
       $this->load->view('admin/include/header_view');
 
 $this->load->view('student/Contact_view');
 $this->load->view('admin/include/footer_view');
}


}
?>
 
 