<?php
class User_model extends CI_Model
{
  

public function record_count() {
        return $this->db->count_all("student_info");
    }

    

    

public function fetch_verify($limit, $start) {

$this->db->limit(($limit)-1,$start);

$this->db->select('*');
$this->db->from('student_info');
$this->db->join('student_admission', 'student_info.Reg_id = student_admission.Reg_id');
$this->db->where('student_info.admission_status' , 1);
$query = $this->db->get();

if ($query->num_rows() > 0 ) {

foreach ($query->result() as $row) {
$data[] = $row;
}

return $data;
}
else
{
  echo "No data found" ;
}
}


public function fetch_data($limit, $start) {

$this->db->limit($limit,$start);

$this->db->select('*');
$this->db->from('student_info');
$this->db->where('admission_status' , 0);
$query = $this->db->get();
if ($query->num_rows() > 0 ) {

foreach ($query->result() as $row) {
$data[] = $row;
}

return $data;
}
else
{
  echo "No data found" ;
}
}






function get_posts_count()
{
  $this->db->select('Reg_id')->from('student_info');
  $query = $this->db->get();
  return $query->num_rows(); 
      
}

function get_posts($num = 10 , $start = 0 )
{
  $this->db->select()->from('student_info')->limit($num,$start);
  $query = $this->db->get() ; 
  return $query->result_array();
}











   /** 
    usage::
    
    $data =  $this->user_model->get('admin_login','admin');
        print_r($data); 
    **/
    public function get($table = NULL ,$user_id = NULL)
    {
        if($user_id === NULL)
        {
           $q = $this->db->get($table) ; 
        }
        else
        {
            $q = $this->db->get_where($table,['Reg_id'=>$user_id]);
        }
        return $q->result_array() ; 
    }
    
   /**
    usage::
    $result = $this->user_model->insert(['user_id' =>'amit']); 
        print_r($result) ; 
    **/
   
    
    public function insert($table , $data)
    {
        $this->db->insert($table , $data) ; 
        return $this->db->insert_id() ; 
        
    }
            
  /**
   usage::
    $result = $this->user_model->update(['user_id' =>'peggy'],3);
        print_r($result) ; 
    **/
    public function update($table ,$data , $user_id)
    {
        $this->db->where(['user_id'=> $user_id]);
        $this->db->update($table,$data) ;
        
        return $this->db->affected_rows() ; 
        
    }
    
    /**
   usage::
     $result = $this->user_model->delete(6);
    **/
    public function delete($table,$user_id)
            
    {
         $this->db->delete($table,['user_id'=> $user_id]) ; 
         return $this->db->affected_rows() ; 
         
    }
    
    //Image Upload 
    


     public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('Student/uploadform_view', $error);
                        foreach ($error as $row) {
                       $this->session->set_flashdata('item1', $row);
                        redirect('student/form');
                       }
                }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $image = $row['file_name']; 
                       return $image; 
                       // $this->load->view('upload_success', $data);
                
                             
            }


        }




     public function do_upload_sign()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                
                $this->load->library('upload', $config);




                  if ( ! $this->upload->do_upload('Sign_file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       // $this->load->view('Student/uploadform_view', $error);
                       foreach ($error as $row) {
                       $this->session->set_flashdata('item2', $row);
                        redirect('student/form');
                       }
                       
                }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $sign = $row['file_name']; 
                       return $sign; 
                       // $this->load->view('upload_success', $data);
                
                             
                }
            }

     public function do_upload_draft()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);




  if ( ! $this->upload->do_upload('Draft_file'))
                {
                       
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('Student/uploadform_view', $error);
                       foreach ($error as $row) {
                       $this->session->set_flashdata('item3', $row);
                        redirect('student/form');
                       }
                     }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $Draft = $row['file_name']; 
                       return $Draft; 
                       //$this->load->view('upload_success', $data);
                
                             
                }





        }






     public function do_upload_update()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('Student/uploadform_view', $error);
                        foreach ($error as $row) {
                       $this->session->set_flashdata('item1', $row);
                        redirect('student/dashboard');
                       }
                }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $image = $row['file_name']; 
                       return $image; 
                       // $this->load->view('upload_success', $data);
                
                             
            }


        }




     public function do_upload_sign_update()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                
                $this->load->library('upload', $config);




                  if ( ! $this->upload->do_upload('Sign_file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       // $this->load->view('Student/uploadform_view', $error);
                       foreach ($error as $row) {
                       $this->session->set_flashdata('item2', $row);
                       redirect('student/dashboard');
                       }
                       
                }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $sign = $row['file_name']; 
                       return $sign; 
                       // $this->load->view('upload_success', $data);
                
                             
                }
            }

     public function do_upload_draft_update()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);




  if ( ! $this->upload->do_upload('Draft_file'))
                {
                       
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('Student/uploadform_view', $error);
                       foreach ($error as $row) {
                       $this->session->set_flashdata('item3', $row);
                       redirect('student/dashboard');
                       }
                     }
                else
                {
                        $upload_data = array('upload_data' => $this->upload->data());
                       
                        foreach ($upload_data as $row)
                    $Draft = $row['file_name']; 
                       return $Draft; 
                       //$this->load->view('upload_success', $data);
                
                             
                }





        }












    
    
    }


?>








