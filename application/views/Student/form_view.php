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

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admission Form</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          <li class="active"><a href="#"><span class="sr-only"></span> <span class="glyphicon glyphicon-dashboard"> </span>Home</a></li>
          
           <li><a href="Instruction"><span class="glyphicon glyphicon-info-sign"> </span>Read Instruction</a></li>
        

        
        <li>  <a href="contact"> </span>Contact us</a></li>
      
    </div>
  </div>
</nav>


  <div class="container">
            <div class="row">
                <div class="col-md-2">
   <div class="list-group">
  
  <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-edit"> </span>Fillup form </a>
     
   <a href="login" class="list-group-item  ">Print form</a>
  </span> <a href="Send" class="list-group-item" >Send Application form</a>
  
</div>  
                </div>
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
                        <li><a href="#profile" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled ">Academic detail</a></li>
                        <li><a href="#messages" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled">Upload document</a></li>
                        <li><a href="#Bank" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled  ">Bank Detail</a></li>
                        <li><a href="#settings" data-toggle="tab" class = "btn btn-large btn-block btn-success disabled ">Contact Detail</a></li>
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



echo form_open_multipart('student/success',$attributes) ;?> 

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
      
      <input type="text" name="FirstName"  id = "FirstName" class = "form-control" placeholder = "First Name" />
       <span class="demo-errors"></span>
               
</td>

<td>
     
      
      <input type="text" name="LastName"  id = "LastName" class = "form-control" placeholder = "Last Name" />
    
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
      
      <input type="text" name="FName"  id = "fname" class = "form-control" />
     <span class="demo-errors"></span>
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
      <input type="text" name="MName" id="mname"  class = "form-control">
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
                    <input type='text'  name = "DOB" id = "DOB" class = "form-control"/>
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
  
  <select class="form-control" id="Course" name = "Course">
    <option value = "-1" >Select Course</option>
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
    <option value = "-1" >Select Semester</option>
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
    <option value = "-1" >Select Category</option>
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
    <option value = "-1">Select Religion</option>
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
        <option value = "-1" >Select Category</option>
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
    <td><input type="text" id="Email_id" name = "Email_id" class = "form-control">
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
    <td><input type="text" name="Mobile_no" id="Mobile_no" class = "form-control" >
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

<td><input type="text" name="Board" id = "Board" maxlength="30" /></td>
<td><input type="text" name="Rollno" id = "Rollno" maxlength="30" /></td>
<td><input type="text" name="Passyear" id = "Passyear"maxlength="30" /></td>
<td><input type="text" name="Marks" id = "Marks" maxlength="30" /></td>
<td><input type="text" name="Total" id = "Total" maxlength="30" /></td>
<td><input type="text" name="Percent"  id = "Percent" maxlength="30" /></td>

</tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<tr>
<td>Class XII</td>
<input type="hidden" name="Exam1" id = "Exam"  value = "Class XII" />

<td><input type="text" name="Board1" id = "Board" maxlength="30" /></td>
<td><input type="text" name="Rollno1" id = "Rollno" maxlength="30" /></td>
<td><input type="text" name="Passyear1" id = "Passyear"maxlength="30" /></td>
<td><input type="text" name="Marks1" id = "Marks" maxlength="30" /></td>
<td><input type="text" name="Total1" id = "Total" maxlength="30" /></td>
<td><input type="text" name="Percent1"  id = "Percent" maxlength="30" /></td>

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

<td><input type="text" name="Board2" id = "Board" maxlength="30" /></td>
<td><input type="text" name="Rollno2" id = "Rollno" maxlength="30" /></td>
<td><input type="text" name="Passyear2" id = "Passyear"maxlength="30" /></td>
<td><input type="text" name="Marks2" id = "Marks" maxlength="30" /></td>
<td><input type="text" name="Total2" id = "Total" maxlength="30" /></td>
<td><input type="text" name="Percent2"  id = "Percent" maxlength="30" /></td>

</tr>




<td></td>
<td></td>
<td><center><button class="tab-button2" id = "nextTab" type="submit" name = "submit" class=""><font color = "white">Next</font></button></center>

<td><center><button class="tab-buttonb2" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 
</tr> 
</table> 
  
    </div>
   

    <!-------------------------Upload Picture---------------------------------------------------------->



    <div role="tabpanel" class="tab-pane" id="messages">

<table width="691" border="0" align="center">
  <tr>
    <td width="400">&nbsp;</td>
    <td width="300">&nbsp;</td>
      <td width="200">&nbsp;</td>
    </tr>
<tr>
<td>
Picture* :  
</td>
<td>
<input type="file" name ="userfile" size="20" id = "Image" accept="image/*" onchange= "loadFile(event)"  />

<p id="demo"></p>
</td>
<td>
<img id="output"/>
</td>
</tr>


<tr>
<td>
Signature* : 
</td>
<td>
<INPUT type="file" name="Sign_file" id = "Sign_file" accept="image/*" onchange="SignFile(event)" /> 
<p id="demo"></p>
</td>
<td>
<img id="sign"/>
</td>
</tr>

<tr>
<td>
Demand Draft * : 
</td>
<td>
<INPUT type="file" name="Draft_file" id = "Draft_file" accept="image/*" onchange="DraftFile(event)" /> 
<p id="demo"></p>
</td>
<td>
<img id="Draft"/>
</td>
</tr>





<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>


<td></td>
<td></td>
<td><center><button class="tab-button3" id = "nextTab" type="submit" name = "submit" class="" onClick = "do_upload()" ><font color = "white">Next</font></button></center>

<td><center><button class="tab-buttonb3" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 

</tr> 
</table> 





    </div>

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
  
  <select class="form-control" id="Bank1" name="Bank1">
    <option value = "-1" >Select Bank</option>
 
        <option value = "Allahabad Bank">Allahabad Bank</option>
        <option value = "Andhra Bank">Andhra Bank</option>
        <option value = "Axis Bank">Axis Bank</option>
        <option value = "Bank of Bahrain and Kuwait">Bank of Bahrain and Kuwait</option>
        <option value = "Bank of Baroda - Corporate Banking">Bank of Baroda - Corporate Banking</option>
        <option value = "Bank of Baroda - Retail Banking">Bank of Baroda - Retail Banking</option>
        <option value = "Bank of India">Bank of India</option>
        <option value = "Bank of Maharashtra">Bank of Maharashtra</option>
        <option value = "Canara Bank">Canara Bank</option>
        <option value = "Central Bank of India">Central Bank of India</option>
        <option value = "City Union Bank">City Union Bank</option>
        <option value = "Corporation Bank">Corporation Bank</option>
        <option value = "Deutsche Bank">Deutsche Bank</option>
        <option value = "Development Credit Bank">Development Credit Bank</option>
        <option value = "Dhanlaxmi Bank">Dhanlaxmi Bank</option>
        <option value = "Federal Bank">Federal Bank</option>
        <option value = "ICICI Bank">ICICI Bank</option>
        <option value = "IDBI Bank">IDBI Bank</option>
        <option value = "Indian Bank">Indian Bank</option>
        <option value = "Indian Overseas Bank">Indian Overseas Bank</option>
        <option value = "IndusInd Bank">IndusInd Bank</option>
        <option value = "ING Vysya Bank">ING Vysya Bank</option>
        <option value = "Jammu and Kashmir Bank">Jammu and Kashmir Bank</option>
        <option value = "Karnataka Bank Ltd">Karnataka Bank Ltd</option>
        <option value = "Karur Vysya Bank">Karur Vysya Bank</option>
        <option value = "Kotak Bank">Kotak Bank</option>
        <option value = "Laxmi Vilas Bank">Laxmi Vilas Bank</option>
        <option value = "Oriental Bank of Commerce">Oriental Bank of Commerce</option>
        <option value = "Punjab National Bank - Corporate Banking">Punjab National Bank - Corporate Banking</option>
        <option value = "Punjab National Bank - Retail Banking">Punjab National Bank - Retail Banking</option>
        <option value = "Punjab & Sind Bank">Punjab & Sind Bank</option>
        <option value = "Shamrao Vitthal Co-operative Bank">Shamrao Vitthal Co-operative Bank</option>
        <option value = "South Indian Bank">South Indian Bank</option>
        <option value = "State Bank of Bikaner & Jaipur">State Bank of Bikaner & Jaipur</option>
        <option value = "State Bank of Hyderabad">State Bank of Hyderabad</option>
        <option value = "State Bank of India">State Bank of India</option>
        <option value = "State Bank of Mysore">State Bank of Mysore</option>
        <option value = "State Bank of Patiala">State Bank of Patiala</option>
        <option value = "State Bank of Travancore">State Bank of Travancore</option>
        <option value = "Syndicate Bank">Syndicate Bank</option>
        <option value = "Tamilnad Mercantile Bank Ltd.">Tamilnad Mercantile Bank Ltd.</option>
        <option value = "UCO Bank">UCO Bank</option>
        <option value = "Union Bank of India">Union Bank of India</option>
        <option value = "United Bank of India">United Bank of India</option>
        <option value = "Vijaya Bank">Vijaya Bank</option>
        <option value = "Yes Bank Ltd">Yes Bank Ltd</option>
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
      <input type="text" name="amount" id="amount"  class = "form-control">
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
      <input type="text" name="Draft_no" id="Draft_no"  class = "form-control">
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
                    <input type='text'  name = "Draftdate" id = "Draftdate" class = "form-control"/>
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
      <input type="text" name="Payable" id="Payable"  class = "form-control">
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
 <input type="text" name="Address"  id = "Address" class = "form-control" placeholder = "Enter Address" />
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
<option value="0">Select State</option>

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
 <input type="text" name="city"  id = "city" class = "form-control" placeholder = "Enter City" />
       <span class="demo-errors"></span>
  </td>
</tr>

<td><center><input type  = "submit" name ="submit" class="btn btn-default success" value = "Save"/></center></td>

<td><center><button class="tab-buttonb5" id = "backTab" type="submit" name = "submit" class=""><font color = "white">Back</font></button></center></td> 
</tr> 
</p>
</table> 

    </div>
  

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

    <?php 
    
echo form_close() ; 
?>

</body>
</html>
    
