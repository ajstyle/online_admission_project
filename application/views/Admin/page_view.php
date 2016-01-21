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
      <form class="navbar-form navbar-left" role="search" action = "Search" method = "POST">
        <div class="form-group">
          <input type="text" name = "search" class="form-control" placeholder="Enter Registration Id ">
        </div>
        <input type="submit" value = "Search" class="btn btn-default"></input>     
        </form>
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


<center>
<h3>Search Result </h3>
<p>-------------------------------------------------------------------------------------------------</p>
</center>
<?php


$this->db->select('Reg_id,FirstName,LastName,FName,MName');
$this->db->from('student_info');
$this->db->like('FirstName' , $reg);
 $this->db->or_like('LastName', $reg);
  $this->db->or_like('Reg_id', $reg);

$query = $this->db->get();
if($query->num_rows()>0 )
{
?>

<table width="691" border="0" align="center" class="table table-bordered">
    <tr>
    <th width="150">Registration no. </th>
<th width="200">Name</th>
 <th width="200">Father Name :</th>
<th width="200">Mother Name : </th>
<th width="200"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Operation </th>
</tr>
</table>


<?php

 foreach ($query->result_array() as $row)
{

?>
     
     <table width="691" border="0" align="center" class="table table-bordered">
 <form action = "<?=base_url() . "admin/detail";?>" method = 'POST'>

      <tr>
    
     <input type = "hidden" name = "reg" value = <?=$row['Reg_id']; ?> />
        <td width="150"><h5> <?=$row['Reg_id'];?> </h5></td>
       <td width="200"><h5> <?=$row['FirstName'];?>&nbsp; <?=$row['LastName'];?> </h5></td>
      
         <td width="200"><h5> <?=$row['FName'];?> </h5></td>
        <td width="200"><h5> <?=$row['MName'];?> </h5></td>
       
         <h5><td width = "200"><button type="submit" class="btn btn-primary btn-sm" >
  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"   ></span> More Detail
</button> </td></h5>
        
</form>

    
 
    
        </tr>
    
   
      

</table>


</div>
</div>
</div>




<?php }} 
else 
{
	echo "<Center><b><h1>  NO Record Found </h1></b></Center>" ;
    echo "<a href = dashboard>Back to Home </a> " ; 
}

?>






