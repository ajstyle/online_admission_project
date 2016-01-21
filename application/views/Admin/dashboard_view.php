
<html>
<body>
    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          <li class="active"><a href="#"><span class="sr-only"></span> <span class="glyphicon glyphicon-dashboard"> </span>Dashboard</a></li>
      </ul>
     <center>
      <form class="navbar-form navbar-left" role="search" action = "Search" method = "POST">
        <div class="form-group">
          <input type="text" name = "search" class="form-control" placeholder="Enter Registration Id or Name ">
        </div>
        <input type="submit" value = "Search" class="btn btn-default"></input>     
        </form>
        </center>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> My Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#">Profile</a></li>
               
            
      </ul>
          </li>
          <li><a href="<?=site_url('Admin/Dashboard/logout');?>"><i class="glyphicon glyphicon-log-out" ></i> Logout </a></li>
             </ul>
    </div>
  </div>
</nav>
   

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
   <div class="list-group">
  
     
  
  <a href=""  data-toggle="modal" data-target="#myModal" class="list-group-item" >Send Notification</a>
</div>  
                </div>
            

</center>
     <center>       
<h3><p>    Click here to get Verify Student List</p></h3> </br>
<a href = "student_list"> <button class="btn btn-success btn-lg">New Student List</button></a></br>

<h3><p>    Click here to get Student List</p></h3> </br>
<a href = "student_verify"> <button class="btn btn-success btn-lg">Student List </button></a></br>

</center>

 

                </div>
           
            </div>
              
            
        </div>
   



<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     
      <div class="modal-header">
     
     <h3>Contact Us :</h3> 

       </div>
      <div class="modal-body">
      <?php $this->load->view("admin/notification_view");?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>











    </section>


   



</form>

   </html>