<?php
class update extends CI_Controller
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
       
    
      
                

$query = $this->db->query("Select * from student_info");


        $this->load->helper(array('form', 'url'));

       
  $session =  $this->session->all_userdata() ;
           $reg_id = $session['Reg_id'];
           
//echo $new_reg_id ;
  
  $this->load->view("admin/include/header_view");
  $this->load->view("student/updatesuccess_view");

  $this->load->view("admin/include/footer_view");
  

   $data = array
            (
                'reg_id' =>$reg_id, 
                'FirstName' => $this->input->post('FirstName'),
                'LastName' => $this->input->post('LastName'), 
               
                'FName' => $this->input->post('FName'), 
                 'MName' => $this->input->post('MName'), 
                  'Cast_Category' => $this->input->post('Cast_Category'), 
                    'Religion' => $this->input->post('Religion'), 
                    'Stu_Category' => $this->input->post('Stu_Category'), 
                    'Gender' => $this->input->post('Gender'), 
                    'DOB' => $this->input->post('DOB'), 
                      
                   'Address' => $this->input->post('Address'),
                     'city' => $this->input->post('city'),
                      'state' => $this->input->post('state'),
                   'Mobile_no' => $this->input->post('Mobile_no'), 
                   'Email_id' => $this->input->post('Email_id'),  
                      
                      
            );

       
            $this->db->replace('student_info',$data);
             
           ?>
         
           <?php

                                  $edu = array
            (
                'reg_id' => $reg_id ,
                 'Exam' => $this->input->post('Exam'),
                'Board' => $this->input->post('Board'),
                'Rollno' => $this->input->post('Rollno'), 
                'Passyear' => $this->input->post('Passyear'), 
                'Marks' => $this->input->post('Marks'), 
                 'Total' => $this->input->post('Total'), 
                  'Percent' => $this->input->post('Percent'), 
            );
            $this->db->replace('qualification',$edu);

                $edu = array
            (
                'reg_id' => $reg_id ,
                 'Exam' => $this->input->post('Exam1'),
                'Board' => $this->input->post('Board1'),
                'Rollno' => $this->input->post('Rollno1'), 
                'Passyear' => $this->input->post('Passyear1'), 
                'Marks' => $this->input->post('Marks1'), 
                 'Total' => $this->input->post('Total1'), 
                  'Percent' => $this->input->post('Percent1'), 
            );
            $this->db->replace('qualification',$edu);
         
                $edu = array
            (
                'reg_id' => $reg_id,
                 'Exam' => $this->input->post('Exam2'),
                'Board' => $this->input->post('Board2'),
                'Rollno' => $this->input->post('Rollno2'), 
                'Passyear' => $this->input->post('Passyear2'), 
                'Marks' => $this->input->post('Marks2'), 
                 'Total' => $this->input->post('Total2'), 
                  'Percent' => $this->input->post('Percent2'), 
            );
            $this->db->replace('qualification',$edu);

             $Course = array
            (
                'reg_id' => $reg_id,
                 'Course_name' => $this->input->post('Course'),
                'Semester' => $this->input->post('Semester'),
                
            );
            $this->db->replace('course',$Course);
        
            $fee = array
            (
                'reg_id' => $reg_id,
                 'Bank_name' => $this->input->post('Bank1'),
                'amount' => $this->input->post('amount'),
                'Draft_no' => $this->input->post('Draft_no'), 
                'Draft_date' => $this->input->post('Draftdate'), 
                'Payble_at' => $this->input->post('Payable'), 
                 
            );
            $this->db->replace('fees_detail',$fee);

  }

}
?>
