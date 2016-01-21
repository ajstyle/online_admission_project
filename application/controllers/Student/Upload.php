<?php
class Upload extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form') ; 
	}

    function index()
    {
    	$this->load->view('Student/uploadform_view',array('error' => '')) ;
    }
 
    function do_upload()
    {
    	$config['upload_path'] = './uploads';
    	$config['allowed_types'] = 'gif|jpg|png' ; 
    	$config['max_size'] = '100' ; 
    	$config['max_width'] = '1024' ; 
        $config['max_hight'] = '768' ;
        $this->load->library('upload',$config) ;  
    		if(!$this->upload->do_upload())
    		{
    			$error = array('error'=>$this->upload->display_errors()); 
                $this->load->view('Student/uploadform_view',$error) ;

    		}else
    		{
    			$data = array('upload_data'=>$this->upload->data());
                $this->load->view('Student/uploadsuccess_view',$data) ;
    		}
    }
}


?>