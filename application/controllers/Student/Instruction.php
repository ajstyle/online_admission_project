<?php 
class Instruction extends CI_Controller 
{
	public function index()
	{
          $this->load->view("Admin/include/header_view"); 

          $this->load->view("Student/faq.html") ; 
	      $this->load->view("Admin/include/footer_view");
	}
}