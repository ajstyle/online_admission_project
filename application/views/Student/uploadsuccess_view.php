<h3>Your file is succesful upload </h3>
<ul>

<?php foreach($upload_data as $key=>$value)
{
	?>

<li><?=$key?>: <?=$value?></li>
<?php 




}

 
$a = $upload_data['file_name'] ;
 
  
 ?>

</ul>
<img src = "<?=base_url()?>uploads/<?=$a?>" />