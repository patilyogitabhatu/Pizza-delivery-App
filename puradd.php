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
$items = mysqli_real_escape_string($link, $_REQUEST['items']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$quntity = mysqli_real_escape_string($link, $_REQUEST['quntity']);
$unit = mysqli_real_escape_string($link, $_REQUEST['unit']);
// Attempt insert query execution
$sql = "INSERT INTO purcake (items,name,quntity,unit) VALUES ('$items','$name','$quntity','$unit')";
if(mysqli_query($link, $sql)){
  header("location:pur.php");
} 
else
{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
