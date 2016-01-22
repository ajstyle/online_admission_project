<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../../favicon.ico" />

    <title>Student Sign in form </title>

    <!-- Bootstrap core CSS -->
        

    <!-- Custom styles for this template -->
   <script src="<?=base_url()?>public/css/loginsignin.css" ></script>

    
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

  <body>

    <div class="container">
   
<div class="row">
                <div class="col-md-2">
         <div class="list-group">
  
  <a href="form" class="list-group-item "><span class="glyphicon glyphicon-edit"> </span>Fillup form </a>
     
   <a href="login" class="list-group-item active   ">Print form</a>
   <a href="Send" class="list-group-item" >Send Application form</a>
  
</div>
</div>

 <div class="col-md-9">
             <p class = "bg-danger">

<?php 
if($this->session->mark_as_flash('item'))
echo $_SESSION['item'] ; 
?>
</p>
      <form class="form-signin" action = "login/check" method = "POST"/>
         

        <h2 class="form-signin-heading">Student Sign in </h2>
        <label for="inputEmail" class="sr-only">Reg_id</label>
        <input type="text" id="Reg_id" name = "Reg_id" class="form-control" placeholder="Registration id " required="" autofocus="" />
        <label for="inputPassword" class="sr-only">Password</label>
              
            
                <div class='input-group date' id='datetimepicker1' >
                    <input type='text'  name = "DOB" id = "DOB" class = "form-control" placeholder="Enter Date of birth " required = " " />
                     <span class="demo-errors"></span>
    
                    <span class="input-group-addon">
                        
                    </span>
                </div>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" /> Remember me
          </label>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
      <b>
      
      </form>

     
    </div> <!-- /container -->
   

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
       <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datepicker();
            });
        </script>


</div>
  </body>
</html>
