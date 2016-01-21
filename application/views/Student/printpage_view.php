<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
 
</head>
<body>

  

	
<center>
<h3>Student Admission Form </h3>
<p>-------------------------------------------------------------------------------------------------</p>
</center>
<?php
$this->load->library('table');
     

 $this->db->select('*');
$this->db->from('course');
$this->db->where('student_info.Reg_id' , $reg);
$this->db->join('student_info', 'student_info.Reg_id = course.Reg_id');
$query = $this->db->get();

        





$edu = $this->user_model->get('qualification',$reg );
//$Course = $this->user_model->get('course',$reg );



        foreach ($query->result_array() as $row)
{ 
        

     ?>
<h4><b><u>Basic Detail :</u></b> </h4>     
  <div class="container-fluid">
<div class="row">
  

  <div class="col-sm-8">
  	

  
<div class = "reg">

     <table  border="0"  class="table table-bordered">
     
     
     
      <tr>
     <td><h5><b>Registration no : </b></h5></td> 
     <td><h5> <?=$row['Reg_id'];?> </h5></td>
    
     </tr>
   
      

    <tr>
     <td><h5><b>Name : </b></h5></td> 
     <td><h5> <?=$row['FirstName'];?>&nbsp; <?=$row['LastName'];?> </h5></td>
     
     </tr>
    



     <tr>
     
      



     <tr>
     <td><h5><b>Father Name : </b></h5></td> 
     <td><h5> <?=$row['FName'];?> </h5></td>
     </tr>

     
    <tr>
     <td><h5><b>Mother Name : </b></h5></td> 
     <td><h5> <?=$row['MName'];?> </h5></td>
     </tr>

    


    <tr>
     <td><h5><b>Date of Birth</b></h5></td> 
     <td><h5> <?=$row['DOB'];?> </h5></td>
     </tr>

     <tr>
     <td><h5><b>Course</b></h5></td> 
     <td><h5> <?=$row['Course_name'];?> </h5></td>
     </tr>
  
    <tr>
     <td><h5><b>Semester</b></h5></td> 
     <td><h5> <?=$row['Semester'];?> </h5></td>
     </tr>

    <tr>
     <td><h5><b>Cast</b></h5></td> 
     <td><h5> <?=$row['Cast_Category'];?> </h5></td>
     </tr>

   

    <tr>
     <td><h5><b>Religion</b></h5></td> 
     <td><h5> <?=$row['Religion'];?> </h5></td>
     </tr>

     
    <tr>
     <td><h5><b>Student category</b></h5></td> 
     <td><h5> <?=$row['Stu_Category'];?> </h5></td>
     </tr>
     
     
    <tr>
     <td><h5><b>Gender</b></h5></td> 
     <td><h5> <?=$row['Gender'];?> </h5></td>
     </tr>
 
    
     

    <tr>
     <td><h5><b>Address</b></h5></td> 
     <td><h5> <?=$row['Address'];?> </h5></td>
     </tr>
 
    

    <tr>
     <td><h5><b>City</b></h5></td> 
     <td><h5> <?=$row['City'];?> </h5></td>
     </tr>

    
    <tr>
     <td><h5><b>State</b></h5></td> 
     <td><h5> <?=$row['State'];?> </h5></td>
     </tr>

    
    <tr>
     <td><h5><b>Mobile no.</b></h5></td> 
     <td><h5> <?=$row['Mobile_no'];?> </h5></td>
     </tr>

    

    <tr>
     <td><h5><b>Email_id</b></h5></td> 
     <td><h5> <?=$row['Email_id'];?> </h5></td>
     </tr>

     </table>




</div>






  </div>
  <div class="col-sm-4">
  <div id = "table_image"  >

     <tr>
     
	<img src = "<?=base_url()?>uploads/<?=$row['Image']?>"  style="width:150px;height:150px"/>
    
    
    </tr>
</br>
    <tr>
     
     <img src = "<?=base_url()?>uploads/<?=$row['Sign']?>"  style="width:150px;height:150px"/>
   
    </tr>
     
     </table>
</div>
</div>
</div>
</div>

<?php
}?>

 <h4><b><u>Bank Detail : </u></b> </h4>


     
 
 


  <!---------------------BanK Detail--------------------------------- -->

   <?php
      $Bank = $this->user_model->get('fees_detail',$reg );
        foreach ($Bank as $row)
{
?>

     
     
  <div class="container-fluid">
<div class="row">
  

  <div class="col-sm-8">
    

  
<div class = "reg">

     <table  border="0"  class="table table-bordered">
     
     
     
      <tr>
     <td><h5><b>Registration no : </b></h5></td> 
     <td><h5> <?=$row['Bank_name'];?> </h5></td>
    
     </tr>

     <tr>
     <td><h5><b>Amount :  </b></h5></td> 
     <td><h5> <?=$row['amount'];?> </h5></td>
     </tr>

     
    <tr>
     <td><h5><b>Draft_no : </b></h5></td> 
     <td><h5> <?=$row['Draft_no'];?> </h5></td>
     </tr>

    


    <tr>
     <td><h5><b> Draft_date :  </b></h5></td> 
     <td><h5> <?=$row['Draft_date'];?> </h5></td>
     </tr>

     <tr>
     <td><h5><b>Payable at :  </b></h5></td> 
     <td><h5> <?=$row['Payble_at'];?> </h5></td>
     </tr>
  
   
 
    
     



  </table>   
<?php }?>
   















 <!---------------------Qualification--------------------------------- -->
 <h4><b><u>Qualification detail : </u></b></h4>

<?php 
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="table table-bordered">'
);

$this->table->set_template($template);
 //$query = $this->db->query("select * from qualification where Reg_id = '$reg'");

$this->table->set_heading(array('Exam', 'Board', 'Roll no' , 'Pass year' , 'Marks' , 'Total' , 'Percent' ));
$this->db->select('Exam, Board, Rollno ,Passyear  , Marks,  Total , Percent');

$this->db->where('Reg_id', $reg);
$query = $this->db->get('qualification');
$row = $query->row_array();
$row1 = $query->row_array(1);
$row2 = $query->row_array(2);

        $this->table->add_row($row);
        $this->table->add_row($row1);
        $this->table->add_row($row2);
        echo $this->table->generate();      
       
           
 ?>     

</body>
</html>