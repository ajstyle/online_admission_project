<?php
class User extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ; 
    }
    public function get() 
    {
        $data =  $this->user_model->get('admin_login','admin');
        print_r($data);
        $this->output->enable_profiler();
    }
    public function login()
    {
        $this->session->set_userdata([
            'user_id' =>  'admin'
        ]);
    
        $session = $this->session->userdata('user_id') ; 
        print_r($session);
    }

    public function insert()
    {
        $result = $this->user_model->insert('admin_login',['user_id' =>'amit']); 
        print_r($result) ; 
         $this->output->enable_profiler();
        
    }
            
    public function update()
    {
        $result = $this->user_model->update('admin_login',['user_id' =>'peggy'],'amit');
        print_r($result) ; 
    }
    public function delete()
    {
        $result = $this->user_model->delete('admin_login','peggy');
        print_r($result) ;
        
    }
    
    
    
    
    }


?>








