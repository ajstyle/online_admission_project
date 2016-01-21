<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');

class Student_list extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
         
    $this->load->helper("url");
        $this->load->model("user_model");
        $this->load->library("pagination");


    }
        public function index()
              
      {

        
             $config = array();
            $config["base_url"] = base_url() . "admin/student_list/index";
    $config["total_rows"] = $this->user_model->record_count();
   
    $config["per_page"] = 5;
    $config["uri_segment"] = 4;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);

$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Previous';
    

  //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';



















        $this->pagination->initialize($config);

           if($this->uri->segment(4)){
$page = ($this->uri->segment(4)) ;
}
else{
$page = 0;
}


    $data["results"] = $this->user_model
        ->fetch_data($config["per_page"], $page);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );

        
          

 
    $this->load->view('admin/include/header_view');
         $this->load->view('admin/student_info_view',$data);
          $this->load->view('admin/include/footer_view');
              
       
      
         
      }


    }