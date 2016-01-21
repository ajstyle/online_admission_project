<?php
class detail extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ;
        $this->load->helper('form') ; 
 
  
    }
               
      

              public function index()
              
      {
           
          $reg_id = $this->input->post('reg'); 
         $data['reg'] = $reg_id ;
          $this->load->view('admin/include/header_view');
          $this->load->view("Student/printpage_view",$data);
          $this->load->view('admin/include/footer_view');
              
          
      
      }
    

            public function delete()
              {

$reg_id = $this->input->post('reg1'); 
                 $this->db->where('Reg_id', $reg_id);
$this->db->delete('student_info');

 $this->db->where('Reg_id', $reg_id);
$this->db->delete('Course');

 $this->db->where('Reg_id', $reg_id);
$this->db->delete('fees_detail');

 $this->db->where('Reg_id', $reg_id);
$this->db->delete('qualification');
redirect("admin/student_list");


              }

 public function verify()
              {
      
  $reg_id = $this->input->post('reg1'); 

$i =  substr("$reg_id", 7); 
 echo $i ; 
 $enrollment_no = "MCA".date('Y')."/".$i ; 

$this->db->set('admission_status', '1');
$this->db->where('Reg_id', $reg_id);
$this->db->replace('student_info');
             
$data=array('admission_status'=>1);
$this->db->where('Reg_id',$reg_id);
$this->db->update('student_info',$data);


 $data = array
            (
                'reg_id' =>$reg_id, 
                'Enrollment_no' =>$enrollment_no , 
                 'Admission_status' => '1'       
           );
              $this->db->insert('student_admission',$data);
           redirect("admin/student_list");  

              } 
















      }