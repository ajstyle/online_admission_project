<html>
<body>
    <?php $session =  $this->session->all_userdata() ;
           $reg_id = $session['Reg_id'];
           
        ?>
                   
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Student Panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> My Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#">Profile</a></li>
               
            
      </ul>
          </li>
          <li><a href="<?=site_url('student/dashboard/logout');?>"><i class="glyphicon glyphicon-log-out" ></i> Logout </a></li>
             </ul>
    </div>
  </div>
</nav>
   

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
   <div class="list-group">
    <a href="#" class="list-group-item active">Update Information </a>
     
   <a href="printform/reg" class="list-group-item">Print Application Form</a>
 
 </span> 
</div>  
               </div>
               <div class="col-md-10">
                          
       
                 <?php  $this->load->view("Student/update_view");?>    



                </div>
           
            </div>
              
            
        </div>

   


    </section>





</form>

   </html>