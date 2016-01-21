<html>
<head>
<title>My Form</title>
</head>
<body>
</br>
</br>
<Center><h2>Your form was successfully submitted!</h2></Center>
</br>
</br>
<?php 

     $attributes = array('name' => 'printform');
echo form_open('student/printform',$attributes) ; 
 
          $query = $this->db->query(" select *  from student_info " );
          $row = $query->last_row() ; 

           $reg = $row->Reg_id;
            
        echo "<h1>" ; echo "Your Registration id is " . $reg ; 
         echo "</h1>";
         echo "<h2> <center>" ; echo "Registration id Sent to your Email_id " ;echo "</center><h2>" ; 
         
         echo "<h2> <center>" ; echo "For further enquiry save to  Registration id " ;echo "</center><h2>" ; 
         echo "<h3> <center>" ; echo "For Update your Detail Click to login and Update your detail " ;echo "</center><h3>" ; 
         
          ?>
          </br>
          
          </br>
      <center><h3> Application form  : <input type = "submit" name = "submit" value = "Click here" /></center></h3>
</br>
</br>
<input type = "hidden" name = "reg" value = <?php echo $reg ?> />
<center><h3>Back to Login :  <a href="login"> Click here  </a></center></h3>   

          
  <?php

 echo form_close();        
 ?> 




</body>
</html>