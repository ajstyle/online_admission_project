<?php


$query = $this->db->query('SELECT * FROM student_info');

if ($query->num_rows() <= 0)
{
  $reg = "MCA20151" ; 
}
else
{      
        $query = $this->db->query("SELECT reg_id FROM student_info where reg_id = '$reg' "); 
          $row = $query->row();
          $reg =$row->reg_id;
        
          $i =  substr("$reg", 7); 
         

           $reg = "MCA".date("Y").++$i ;
          
         echo $reg ; 
}

?>
