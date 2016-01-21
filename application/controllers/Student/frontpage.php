
 <?php

class frontpage extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('fname', 'Father name', 'required',
                        array('required' => 'You must provide a %s.')
                );

                $this->form_validation->set_rules('mname', 'Mother name', 'required');
                $this->form_validation->set_rules('Email', 'Email', 'required');
                $this->form_validation->set_rules('Mobile', 'Mobile NO.', 'required');
                

                if ($this->form_validation->run() == FALSE)
                {
                          $this->load->view("Admin/include/header_view"); 

                        $this->load->view("Student/frontpage_view"); 
                         $this->load->view("Admin/include/footer_view"); 
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}   

    
