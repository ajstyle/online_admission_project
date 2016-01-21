<?php
class success extends CI_Controller
{ 


    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model') ;
        $this->load->helper('form') ; 
 $this->load->helper('array');
 
 $this->load->library('email');
  
    }

 

	public function index()
	{
       $Email_id = $this->input->post('Email_id');
    
      $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'masterofcomputer2014@gmail.com';
        $config['smtp_pass']    = 'mlsu2014';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not   
        $config['mail_path'] = 'ssl://smtp.gmail.com' ;  

        $this->email->initialize($config);

          $this->email->from('masterofcomputer2014@gmail.com', 'University Computer Center');
        $this->email->to($Email_id); 

        $this->email->subject(' University Admission ');
         $query = $this->db->query(" select *  from student_info " );
          $row = $query->last_row() ; 

           $reg = $row->Reg_id;
         
            $MESSAGE_BODY = "Your Registration id is  ".$reg."   "; 
$MESSAGE_BODY .= "For further enquiry save to  Registration id "; 
$MESSAGE_BODY .= "and Login with Reg_id and Date of Birth "; 

        $this->email->message($MESSAGE_BODY);  

        $this->email->send();

        echo $this->email->print_debugger();

      
       $image = $this->user_model->do_upload();
       $Sign = $this->user_model->do_upload_sign();
       
       $Draft = $this->user_model->do_upload_draft();
                  
                

$query = $this->db->query("Select * from student_info");


        $this->load->helper(array('form', 'url'));

         if($query->num_rows() <=0 )
         {
        
         $reg = "MCA2015101" ; 
           $data = array
            (
                'reg_id' =>$reg, 
                'FirstName' => $this->input->post('FirstName'),
                'LastName' => $this->input->post('LastName'), 
                'LastName' => $this->input->post('LastName'), 
                'FName' => $this->input->post('FName'), 
                 'MName' => $this->input->post('MName'), 
                  'Cast_Category' => $this->input->post('Cast_Category'), 
                    'Religion' => $this->input->post('Religion'), 
                    'Stu_Category' => $this->input->post('Stu_Category'), 
                    'Gender' => $this->input->post('Gender'), 
                    'DOB' => $this->input->post('DOB'), 
                   'Mobile_no' => $this->input->post('Mobile_no'), 
                   'Email_id' => $this->input->post('Email_id'), 
                   'Address' => $this->input->post('Address'),
                   'city' => $this->input->post('city'),
                   'state' => $this->input->post('state'),
                      'Image' => $image,
                       'Sign' => $Sign,
                       'Draft' => $Draft,
            );
            $this->db->insert('student_info',$data);

            $edu = array
            (
                'reg_id' => $reg,
                 'Exam' => $this->input->post('Exam'),
                'Board' => $this->input->post('Board'),
                'Rollno' => $this->input->post('Rollno'), 
                'Passyear' => $this->input->post('Passyear'), 
                'Marks' => $this->input->post('Marks'), 
                 'Total' => $this->input->post('Total'), 
                  'Percent' => $this->input->post('Percent'), 
            );
            $this->db->insert('qualification',$edu);

                $edu = array
            (
                'reg_id' => $reg,
                 'Exam' => $this->input->post('Exam1'),
                'Board' => $this->input->post('Board1'),
                'Rollno' => $this->input->post('Rollno1'), 
                'Passyear' => $this->input->post('Passyear1'), 
                'Marks' => $this->input->post('Marks1'), 
                 'Total' => $this->input->post('Total1'), 
                  'Percent' => $this->input->post('Percent1'), 
            );
            $this->db->insert('qualification',$edu);


                $edu = array
            (
                'reg_id' => $reg,
                 'Exam' => $this->input->post('Exam2'),
                'Board' => $this->input->post('Board2'),
                'Rollno' => $this->input->post('Rollno2'), 
                'Passyear' => $this->input->post('Passyear2'), 
                'Marks' => $this->input->post('Marks2'), 
                 'Total' => $this->input->post('Total2'), 
                  'Percent' => $this->input->post('Percent2'), 
            );
            $this->db->insert('qualification',$edu);

              $Course = array
            (
                'reg_id' => $reg,
                 'Course_name' => $this->input->post('Course'),
                'Semester' => $this->input->post('Semester'),
                
            );
            $this->db->insert('course',$Course);
        
             $fee = array
            (
                'reg_id' => $reg,
                 'Bank_name' => $this->input->post('Bank1'),
                'amount' => $this->input->post('amount'),
                'Draft_no' => $this->input->post('Draft_no'), 
                'Draft_date' => $this->input->post('Draftdate'), 
                'Payble_at' => $this->input->post('Payable'), 
                 
            );
            $this->db->insert('fees_detail',$fee);


redirect('/student/successpage');

        }  
   

//         $result1  = $this->user_model->insert("student_info",$name);


else 
{

$query = $this->db->query(" select *  from student_info " );
 $row = $query->last_row() ; 

     $reg = $row->Reg_id;

 $i =  substr("$reg", 7); 
 echo $i ; 

 $new_reg_id = "MCA".date('Y').++$i ;
//echo $new_reg_id ;
   
   $data = array
            (
                'reg_id' =>$new_reg_id, 
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
                     'Image' => $image,
                      'Sign' => $Sign,
                      'Draft' => $Draft , 
                      
                      
            );

       
            $this->db->insert('student_info',$data);
             $this->db->select('Image');
           $this->db->where('Reg_id', $new_reg_id);
           $query = $this->db->get('student_info');
           $row = $query->row() ;  
            $image1 = $row->Image;
           ?>
         
           <?php

                                  $edu = array
            (
                'reg_id' => $new_reg_id ,
                 'Exam' => $this->input->post('Exam'),
                'Board' => $this->input->post('Board'),
                'Rollno' => $this->input->post('Rollno'), 
                'Passyear' => $this->input->post('Passyear'), 
                'Marks' => $this->input->post('Marks'), 
                 'Total' => $this->input->post('Total'), 
                  'Percent' => $this->input->post('Percent'), 
            );
            $this->db->insert('qualification',$edu);

                $edu = array
            (
                'reg_id' => $new_reg_id ,
                 'Exam' => $this->input->post('Exam1'),
                'Board' => $this->input->post('Board1'),
                'Rollno' => $this->input->post('Rollno1'), 
                'Passyear' => $this->input->post('Passyear1'), 
                'Marks' => $this->input->post('Marks1'), 
                 'Total' => $this->input->post('Total1'), 
                  'Percent' => $this->input->post('Percent1'), 
            );
            $this->db->insert('qualification',$edu);
         
                $edu = array
            (
                'reg_id' => $new_reg_id,
                 'Exam' => $this->input->post('Exam2'),
                'Board' => $this->input->post('Board2'),
                'Rollno' => $this->input->post('Rollno2'), 
                'Passyear' => $this->input->post('Passyear2'), 
                'Marks' => $this->input->post('Marks2'), 
                 'Total' => $this->input->post('Total2'), 
                  'Percent' => $this->input->post('Percent2'), 
            );
            $this->db->insert('qualification',$edu);

             $Course = array
            (
                'reg_id' => $new_reg_id,
                 'Course_name' => $this->input->post('Course'),
                'Semester' => $this->input->post('Semester'),
                
            );
            $this->db->insert('course',$Course);
        
            $fee = array
            (
                'reg_id' => $new_reg_id,
                 'Bank_name' => $this->input->post('Bank1'),
                'amount' => $this->input->post('amount'),
                'Draft_no' => $this->input->post('Draft_no'), 
                'Draft_date' => $this->input->post('Draftdate'), 
                'Payble_at' => $this->input->post('Payable'), 
                 
            );
            $this->db->insert('fees_detail',$fee);


//
//Image Upload
//-----------------------------------------------------------------------------------------
                /*else
                {
                      
                       


                        $upload_data = array('upload_data' => $this->upload->data());
                        print_r($upload_data);
                        foreach ($upload_data as $row)
                         
                                    $image=$row['full_path']; 
                              
                         
                    $data = array
            (
                'Image' => $image,
            );
               $this->db->insert('student_info',$data);
                       
                        

                  }
                    */
                 
        


        //   $result = $this->user_model->insert("qualification",$edu); 


    
    //query = $this->user_model->get('student_info',$result) ; 
                 
       //         print_r($query); 
         //        echo "Your registration id is MCA2015".$result ; 

//     $educational = $this->user_model->insert("qualification",$edu);

redirect('/student/successpage');
    	 
}

    }
  }

   











/*
               $this->load->library('form_validation');

                $this->form_validation->set_rules('FirstName', 'Name', 'required');
                $this->form_validation->set_rules('FName', 'Father name', 'required',
                        array('required' => 'You must provide a %s.')
                );

                $this->form_validation->set_rules('MName', 'Mother name', 'required');
                $this->form_validation->set_rules('Email_id', 'Email', 'required');
                $this->form_validation->set_rules('Mobile_no', 'Mobile NO.', 'required');
                $this->form_validation->set_rules('Board', 'Board', 'required');
                                

                if ($this->form_validation->run() == FALSE)
                {        
                          $this->load->view("Admin/include/header_view"); 

                        $this->load->view("Student/form_view"); 
                         $this->load->view("Admin/include/footer_view"); 
                        
                }
                else
                {*/
           
//$query = $this->db->query('SELECT * FROM student_info');




/*if ($query->num_rows() > 0)
{
         

            
  //        $reg = $reg_id ;
                                  
       
      
            
             
           $data = array
            (
                'reg_id' =>$reg, 
                'FirstName' => $this->input->post('FirstName'),
                'LastName' => $this->input->post('LastName'), 
                'LastName' => $this->input->post('LastName'), 
                'FName' => $this->input->post('FName'), 
                 'MName' => $this->input->post('MName'), 
                  'Cast_Category' => $this->input->post('Cast_Category'), 
                    'Religion' => $this->input->post('Religion'), 
                    'Stu_Category' => $this->input->post('Stu_Category'), 
                    'Gender' => $this->input->post('Gender'), 
                    'DOB' => $this->input->post('DOB'), 
                   'Mobile_no' => $this->input->post('Mobile_no'), 
                   'Email_id' => $this->input->post('Email_id'), 
                   'Address' => $this->input->post('Address'),
                   'city' => $this->input->post('city'),
                      'state' => $this->input->post('state')
                 

            );
            $this->db->insert('student_info',$data);
        }

*/

?>
