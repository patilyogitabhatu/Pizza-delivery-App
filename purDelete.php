<?php
$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	error_reporting(0);
    $items=$_GET['items'];
	$qu= "DELETE FROM purcake where items='$items'";
	$data=mysqli_query($link,$qu);
	if($data)
	{
		
       ?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=pur.php">
       <?php

     
	}
	else
	{
		echo "<script>alert('fail')</script>";
	}

?>