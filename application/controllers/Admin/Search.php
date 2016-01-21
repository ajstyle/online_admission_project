<?php
class Search extends CI_Controller
{

        public function index()
              
      {
           
          $reg = $this->input->post('search'); 
            $data['reg'] = $reg ; 
    $this->load->view('admin/include/header_view');
         $this->load->view('admin/page_view',$data);
          $this->load->view('admin/include/footer_view');
              
          
      }
    }