      
<?php 

?>



<?php
 

class successpage extends CI_Controller
{
      
          public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ;
        $this->load->helper('form') ; 
 $this->load->helper('array');
          
    }


         function index()
         { 
                 $this->load->view("Admin/include/header_view"); 

                 $this->load->view("student/formsuccess_view"); 

     
       
       
       $this->load->view("Admin/include/footer_view"); 
          
        
          }
    
      }
          ?>

       
