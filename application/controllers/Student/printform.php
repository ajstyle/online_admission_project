

<?php
class printform extends CI_Controller
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
     $this->load->view("Admin/include/header_view"); 
    $reg = $this->input->post('reg');
    $data['reg'] = $reg ; 
     $this->load->view("Student/printpage_view",$data);
    $this->load->view("Admin/include/footer_view"); 
  }




public function reg()
{


     $this->load->view("Admin/include/header_view"); 
    
?>


<?php 
           
    $session =  $this->session->all_userdata() ;
           $reg_id = $session['Reg_id'];
                   
        $data['reg'] = $reg_id ; 
     $this->load->view("Student/printpage_view",$data);
    $this->load->view("Admin/include/footer_view"); 
  }

}




