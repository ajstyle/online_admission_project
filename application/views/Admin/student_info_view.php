
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
  


</div>  
                </div>
            

  <center>
<h3>New Student List</h3>
<p>-------------------------------------------------------------------------------------------------</p>
</center>
  <div class="col-md-10">
  

<table width="691" border="0" align="center" class="table table-bordered">
    <tr>
    <th width="150">Registration no. </th>
<th width="200">Name</th>
 <th width="200">Father Name :</th>
<th width="200">Mother Name : </th>
<th width="400"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Operation </th>
</tr>
</table>

<?php
if($results)
{
 foreach ($results as $data)

{

?>
  
<table width="691" border="0" align="center" class="table table-bordered">
 <form action = "<?=base_url() . "admin/detail";?>" method = 'POST'>

      <tr>
     <td width="150"><h5> <?php  echo  $data->Reg_id ;  ?> </h5></td>
     <input type = "hidden" name = "reg" value = <?=$data->Reg_id ;?> />
       <td width="200"><h5> <?=$data->FirstName;?>&nbsp; <?=$data->LastName;?> </h5></td>
       <td width="200"><h5> <?=$data->FName;?> </h5></td>
        <td width="200"><h5> <?=$data->MName;?> </h5></td>
         
         <h5><td width = "100"><button type="submit" class="btn btn-primary btn-sm" >
  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"   ></span> More Detail
</button> </td></h5>
        
</form>


<form action = "<?=base_url() . "admin/detail/Delete";?>" method = 'POST'>
 <input type = "hidden" name = "reg1" value = <?=$data->Reg_id ;?> />   

 <h5> <td width = "100"><button type="submit" class="btn btn-danger btn-sm">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete
</button></td> </h5>
         </form>

<form action = "<?=base_url() . "admin/detail/verify";?>" method = 'POST'>
<input type = "hidden" name = "reg1" value = <?=$data->Reg_id ;?> />   


       <h5> <td width = "100"><button type="submit" class="btn btn-success btn-sm">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Verify
</button></td> </h5>

</form>
</tr>      

</table>

 

<?php }

?>
   <div class="row">
        <div class="col-md-12 text-center">
<?php foreach ($links as $link) {
echo "<li>". $link."</li>";
} } 
else
{
  echo "<td><center><h1>No New Student for Verify</center></td>" ; 
}


?>

</div>
    </div>

  </div>
  
</div>
</div>
</section>
</body>
</html>









