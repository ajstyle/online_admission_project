  <?php $session =  $this->session->all_userdata() ;
           $reg_id = $session['Reg_id'];
           
          

$this->load->library('table');
     

 $this->db->select('*');
$this->db->from('student_info');
$this->db->where('Reg_id' , $reg_id);
$query = $this->db->get();
 $row = $query->row_array();

 $this->db->select('*');
$this->db->from('course');
$this->db->where('Reg_id' , $reg_id);
$query2 = $this->db->get();
 
$rowCourse = $query2->row_array();

 $this->db->select('*');
$this->db->from('fees_detail');
$this->db->where('Reg_id' , $reg_id);
$query3 = $this->db->get();
 
$rowBank = $query3->row_array();



$this->db->where('Reg_id', $reg_id);
$query1 = $this->db->get('qualification');
 $rowqua1 = $query1->row_array();
$rowqua2 = $query1->row_array(1);
$rowqua3 = $query1->row_array(2);

       ?>

<html>
<head>
<title>My Form</title>
<style type="text/css">
.Bold {
  font-weight: bold;
}
</style>

</head>

<html>
<body>
      <!-- Navigation bar -->

    
  <div class="container">
            <div class="row">
                
               <div class="col-md-10">
                    


  <div>

<p class = "bg-danger">

<?php 
if($this->session->flashdata('item1'))
echo $_SESSION['item1'] ; 
else
  echo "" ; 

if($this->session->flashdata('item2'))
echo $_SESSION['item2'] ; 
else
  echo "" ; 

if($this->session->flashdata('item3'))
echo $_SESSION['item3'] ; 
else
  echo "" ; 







?>
</p> 


  <!-- Nav tabs -->
    
<ul class="nav nav-tabs">
                        <li><a href="#home" class="btn btn-large btn-block disabled " data-toggle="tab" >Basic Detail</a></li>
                        <li><a href="#profile" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled  ">Academic detail</a></li>
                        <li><a href="#Bank" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled   ">Bank Detail</a></li>
                        <li><a href="#settings" data-toggle="tab" class = "btn btn-large btn-block btn-success  disabled ">Contact Detail</a></li>
            </ul>   
  <!-- Tab panes -->
  

</div>
  <!-- Tab panes -->
  <div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="home">
<title>Online Form</title>
</head>



<?php 
$attributes = array('name' => 'Admission_form');



echo form_open_multipart('student/update',$attributes) ;?> 

<center> <h1>Registration Details</h1></center>
 

<!-- Reg Id!-->



<input type="hidden" name="reg_id" value="MCA20151">










<table width="691" border="0" align="center">
  <tr>
    <td width="200">&nbsp;</td>
    <td width="200">&nbsp;</td>
    <td width="200">&nbsp;</td>
    
      
    </tr>
 <p>


  <tr>
    <td><strong>Name*</strong></td>
    <td>
      
      <input type="text" name="FirstName"  id = "FirstName" class = "form-control" placeholder = "First Name" value = "<?=$row['FirstName'];?>"/>
       <span class="demo-errors"></span>
               
</td>

<td>
     
      
      <input type="text" name="LastName"  id = "LastName" class = "form-control" placeholder = "Last Name" value = "<?=$row['LastName'];?>" />
    
       <span class="demo-errors"></span>
      
      
      </td>
          
    </tr>
  
     
  <tr>

    <td>   &nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
   </p> 
  

</table>






<table width="691" border="0" align="center">
  <tr>
    <td width="200">&nbsp;</td>
    <td width="448">&nbsp;</td>
      
    </tr>
 


 

<p>

  <tr>
   
    <td><strong>Father Name</strong></td>
    <td><label for="name"> </label>
      
      <input type="text" name="FName"  id = "fname" class = "form-control" value = "<?=$row['FName'];?>"/>
     <span class="demo-errors" ></span>
      </td>
      
    </tr>
  
     
  <tr>

    <td>   &nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
   </p> 
  

  <p>
  <tr>
    <td><strong>Mother Name:</strong></td>
    <td><label for="name7"></label>
      <input type="text" name="MName" id="mname"  class = "form-control" value ="<?=$row['MName'];?>"/>
      <span class="demo-errors"></span>
   </td>
    </tr>
  

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  

</p>
<p>

  <tr>
    <td><strong>Date of Birth:</strong></td>
     <td>

        
            
                <div class='input-group date' id='datetimepicker1' >
                    <input type='text'  name = "DOB" id = "DOB" class = "form-control" value = "<?=$row['DOB'];?>"/>
                     <span class="demo-errors"></span>
    
                    <span class="input-group-addon">
                        
                    </span>
                </div>
        </td>
   
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</p>  
<p>
<tr>
    <td><strong>Gender</strong></td>
   <td> <div class="radio">
  <label><input type="radio"  name = "Gender" id = "Gender" value = "Male" checked>
    Male
  </label>
  <label><input type="radio"  name = "Gender" id ="Gender" value = "Female">
    Female
  </label>
<span class="demo-errors"></span>
</div>
</td>
</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</p>
<p>

<tr>
  <td><strong>Select Course</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="Course" name = "Course"  >
   <option value = "<?=$rowCourse['Course_name'];?>"><?=$rowCourse['Course_name'];?></option>
  
    <option value = "Bsc IT">B.Sc IT</option>
    <option value = "Msc IT">M.Sc IT</option>
    <option value = "BCA">BCA</option>
    <option value = "MCA">MCA</option>
    <option value = "PGDCA">PGDCA</option>
    </select>
  <span class="demo-errors"></span>
  </div>
</td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>

</p>

<p>

<tr>
  <td><strong>Select Semester</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="Semester" name = "Semester">
  
 <option value = "<?=$rowCourse['Semester'];?>"><?=$rowCourse['Semester'];?></option>
  
    <option value = "Ist Semester">Ist Semester</option>
    <option value = "IIst Semester">IInd Semester</option>
    <option value = "IIIst Semester">IIIrd Semester</option>
    <option value = "IVst Semester">IVth Semester</option>
    <option value = "Vthst Semester">Vth Semester</option>
    <option value = "VIst Semester">VIth Semester</option>
    </select>
  <span class="demo-errors"></span>
  </div>
</td>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>

</p>









<p>
<tr>
  <td><strong>Category</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="Cast_Category" name = "Cast_Category">
    <option value = "<?=$row['Cast_Category'];?>"><?=$row['Cast_Category'];?></option>
  
    <option value = "General">GENERAL</option>
    <option value = "OBC">OBC</option>
    <option value = "ST">ST</option>
    <option value = "SC">SC</option>
    <option value = "SBC">SBC</option>
    </select>
  <span class="demo-errors"></span>
  </div>
</td>
</tr>



  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</p>

<p>
<tr>
  <td><strong>Religion</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="Religion"  name = "Religion">
    <option value = "<?=$row['Religion'];?>"><?=$row['Religion'];?></option>
  
    <option value = "Hindu">Hindu</option>
    <option value = "Muslim">Muslim</option>
    <option value = "Sikh">Sikh</option>
    <option value = "Christian">Christian</option>
    <option value = "Jain">Jain</option>
    <option value = "Budh">Budh</option>
    
    </select>
 <span class="demo-errors"></span>
 
  </div>
</td>
</tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
 </p>







<p>


  <tr>
    <td><strong>Student_Category</strong></td>
    <td><div class="form-group">
      <select class="form-control" id="Stu_Category" name = "Stu_Category">
         <option value = "<?=$row['Stu_Category'];?>"><?=$row['Stu_Category'];?></option>
  
        <option value = "Regular">Regular</option>
        <option value = "Private">private</option>
        
      </select>
 <span class="demo-errors"></span>
   
    </div></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   
</p>
<p>
    <tr>
    <td><strong>Email id :</strong></td>
    <td><input type="text" id="Email_id" name = "Email_id" class = "form-control" value = "<?=$row['Email_id'];?>">
    <span class="demo-errors"></span>
    </td>
    </tr>
   
       
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  </p>


<p>
  <tr>
    <td><strong>Mobile no.</strong></td>
    <td><input type="text" name="Mobile_no" id="Mobile_no" class = "form-control" value = "<?=$row['Mobile_no'];?>" >
<span class="demo-errors"></span>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</p>
  <tr>
    <td>&nbsp;</td>
  

  <td> 
  
     
  
     
    <center> <button class="tab-button" id = "nextTab" onClick = "return ValidateForm()" ><font color="white">Next</font></button></center>
    </td>
  <script>
  function ValidateForm()
  {
     
  }
  </script>
  
  
  </tr>
    
</table>
</body>
</html>

</div>




    <!-------------------------Qualification---------------------------------------------------------->

   
    
    <div role="tabpanel" class="tab-pane" id="profile"> 

<tr>
<td><center><h1>Qualification Detail</h1></center><br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table class = "table-bordered">
 
<tr>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Rollno</b></td>
<td align="center"><b>Pass year</b></td>
<td align="center"><b>Obtain Marks</b></td>
<td align="center"><b>Total Marks</b></td>
<td align="center"><b>Percent</b></td>
</tr>
 

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>




<tr>
<td>Class X</td>
<input type="hidden" name="Exam" id = "Exam"  value = "Class X" />

<td><input type="text" name="Board" id = "Board" maxlength="30" value = "<?=$rowqua1['Board'] ;?>"/></td>
<td><input type="text" name="Rollno" id = "Rollno" maxlength="30" value = "<?=$rowqua1['Rollno'] ;?>" /></td>
<td><input type="text" name="Passyear" id = "Passyear"maxlength="30" value = "<?=$rowqua1['Passyear'] ;?>" /></td>
<td><input type="text" name="Marks" id = "Marks" maxlength="30"value = "<?=$rowqua1['Marks'] ;?>" /></td>
<td><input type="text" name="Total" id = "Total" maxlength="30" value = "<?=$rowqua1['Total'] ;?>"/></td>
<td><input type="text" name="Percent"  id = "Percent" maxlength="30" value = "<?=$rowqua1['Percent'] ;?>" /></td>

</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>
<td>Class XII</td>
<input type="hidden" name="Exam1" id = "Exam"  value = "Class XII" />

<td><input type="text" name="Board1" id = "Board" maxlength="30" value = "<?=$rowqua2['Board'] ;?>" /></td>
<td><input type="text" name="Rollno1" id = "Rollno" maxlength="30" value = "<?=$rowqua2['Rollno'] ;?>" /></td>
<td><input type="text" name="Passyear1" id = "Passyear"maxlength="30" value = "<?=$rowqua2['Passyear'] ; ?>"/></td>
<td><input type="text" name="Marks1" id = "Marks" maxlength="30" value = "<?=$rowqua2['Marks'] ; ?>" /></td>
<td><input type="text" name="Total1" id = "Total" maxlength="30" value = "<?=$rowqua2['Total'] ; ?>" /></td>
<td><input type="text" name="Percent1"  id = "Percent" maxlength="30" value = "<?=$rowqua2['Percent'] ; ?>" /></td>

</tr>

</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>

<tr>
<td>Graduation</td>
<input type="hidden" name="Exam2" id = "Exam"  value = "Graduation" />

<td><input type="text" name="Board2" id = "Board" maxlength="30" value = "<?=$rowqua3['Board'] ; ?>" /></td>
<td><input type="text" name="Rollno2" id = "Rollno" maxlength="30" value = "<?=$rowqua3['Rollno'] ; ?>"/></td>
<td><input type="text" name="Passyear2" id = "Passyear"maxlength="30" value = "<?=$rowqua3['Passyear'] ; ?>" /></td>
<td><input type="text" name="Marks2" id = "Marks" maxlength="30" value = "<?=$rowqua3['Marks'] ; ?>" /></td>
<td><input type="text" name="Total2" id = "Total" maxlength="30" value = "<?=$rowqua3['Total'] ; ?>" /></td>
<td><input type="text" name="Percent2"  id = "Percent" maxlength="30" value = "<?=$rowqua3['Percent'] ; ?>" /></td>

</tr>




<td></td>
<td></td>
<td><center><button class="tab-button2" id = "nextTab" type="submit" name = "submit" class=""><font color = "white">Next</font></button></center>

<td><center><button class="tab-buttonb2" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 
</tr> 
</table> 
  
    </div>
   

    <!-------------------------Upload Picture---------------------------------------------------------->


<!-------------------------------Bank Detail--------------------------------------- --> 


<div role="tabpanel" class="tab-pane " id="Bank">


<table width="691" border="0" align="center">
  <tr>
    <td width="200">&nbsp;</td>
    <td width="448">&nbsp;</td>
      
    </tr>
 


 

<p>

 
<tr>
  <td><strong>Select Bank</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="Bank1" name="Bank1" >
     <option value = "<?=$rowBank['Bank_name'];?>"><?=$rowBank['Bank_name'];?></option>
 
    <option value = "Bsc IT">B.Sc IT</option>
    <option value = "Msc IT">M.Sc IT</option>
    <option value = "BCA">BCA</option>
    <option value = "MCA">MCA</option>
    <option value = "PGDCA">PGDCA</option>
    </select>
  <span class="demo-errors"></span>
  </div>
</td>
</tr>

    
  <tr>

    <td>   &nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
   </p> 
  

  <p>
  <tr>
    <td><strong>Amount</strong></td>
    <td><label for="name7"></label>
      <input type="text" name="amount" id="amount"  class = "form-control" value = "<?=$rowBank['amount'];?>">
      <span class="demo-errors"></span>
   </td>
    </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  

</p>
<p>
<tr>
    <td><strong>Draft_no</strong></td>
    <td><label for="name7"></label>
      <input type="text" name="Draft_no" id="Draft_no"  class = "form-control" value = "<?=$rowBank['Draft_no'];?>">
      <span class="demo-errors"></span>
   </td>
    </tr>
  

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  
</p>
<p>
<tr>
    <td><strong>Draft date</strong></td>
     <td>

        
            
                <div class='input-group date' id='datetimepicker2' >
                    <input type='text'  name = "Draftdate" id = "Draftdate" class = "form-control" 
                    value = "<?=$rowBank['Draft_date'];?>"
                    />
                     <span class="demo-errors"></span>
    
                    <span class="input-group-addon">
                        
                    </span>
                </div>
        </td>
   
  </tr>
  </p>


<p>
<tr>
    <td><strong>Payable at</strong></td>
    <td><label for="name7"></label>
      <input type="text" name="Payable" id="Payable"  class = "form-control" value = "<?=$rowBank['Payble_at'];?>">
      <span class="demo-errors"></span>
   </td>
    </tr>
  

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  
</p>

<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>

<tr>
<td><center><button class="tab-button4" id = "nextTab" type="submit" name = "submit" class=""><font color = "white">Next</font></button></center>

<td><center><button class="tab-buttonb4" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 

</tr> 



   
</table>

</div>

<!---------------------------------Contact us ---------------------------------------- -->
<?php 
 foreach ($query->result_array() as $row1)
{
  ?>
    <div role="tabpanel" class="tab-pane" id="settings">
     <table width="691" border="0" align="center">
  <tr>
    <td width="300">&nbsp;</td>
    <td width="400">&nbsp;</td>
    
      
    </tr>     

<p>
     <tr>



<td>
  Addresss : 
</td>
     
<td>
 <input type="text" name="Address"  id = "Address" class = "form-control" placeholder = "Enter Address" value = "<?=$row['Address']?>"  />
       <span class="demo-errors"></span>
  </td>
</tr>
</p>

 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

<p>
<tr>
  <td><strong>State</strong></td>
<td><div class="form-group">
  
  <select class="form-control" id="state" name = "state">

    <option value = "<?=$row['State'];?>"><?=$row['State'];?></option>
   <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
    </select>
  <span class="demo-errors"></span>
  </div>
</td>
</tr>

</p>
 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<p>
<td>
City :  
</td>
     
<td>

 <input type="text" name="city"  id = "city" class = "form-control" placeholder = "Enter City" value = "<?=$row['City'] ;?>"  />
       <span class="demo-errors"  />></span>
  </td>
</tr>

<td><center><input type  = "submit" name ="submit" class="btn btn-default success" value = "Update"/></center></td>

<td><center><button class="tab-buttonb5" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 
</tr> 
</p>
</table> 

    </div>
<?php } ?>  

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
        </script>


        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datepicker();
            });
        </script>

    

    <script>

         var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
    
            var SignFile = function(event) {
    
        var sign = document.getElementById('sign');
          sign.src = URL.createObjectURL(event.target.files[0]);
  };

  var DraftFile = function(event) {
   
        var Draft = document.getElementById('Draft');
          Draft.src = URL.createObjectURL(event.target.files[0]);
  };

       



    </script>
<script src="<?=base_url()?>public/js/tab1.js" ></script>
<script>
    <?php 
     
echo form_close() ; 
?>

</body>
</html>
    
