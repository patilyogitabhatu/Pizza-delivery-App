<style>
table, th, td {
    border: 1px solid black;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$pid = mysqli_real_escape_string($link, $_REQUEST['pid']);
$pname = mysqli_real_escape_string($link, $_REQUEST['pname']);
$pimg = mysqli_real_escape_string($link, $_REQUEST['pimg']);
$pingre = mysqli_real_escape_string($link, $_REQUEST['pingre']);
$pprice = mysqli_real_escape_string($link, $_REQUEST['pprice']);

// Attempt insert query execution
$sql = "INSERT INTO pizzaitem (pid,pname,pimg,pingre,pprice) VALUES ('$pid','$pname','$pimg','$pingre','$pprice')";
if(mysqli_query($link, $sql)){
  header("location:product.php");
} 
else
{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
