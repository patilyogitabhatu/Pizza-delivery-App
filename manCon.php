<?php

$link = mysqli_connect("localhost", "root", "", "pizza");
  // Check connection
  if($link === false)
  {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(item, '(',qty, unit,')') AS ItemQty FROM card";
$stmt = $link->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {

  $items[] = $row['ItemQty'];
}

$allItems = implode(', ', $items);
$t_date = mysqli_real_escape_string($link, $_REQUEST['t_date']);
$a_name = mysqli_real_escape_string($link, $_REQUEST['a_name']);

// Attempt insert query execution
$sqli = "INSERT INTO manu (t_date, a_name, item) VALUES ('$t_date','$a_name','$allItems')";
if(mysqli_query($link, $sqli))
  {
    $que="DELETE FROM card";
    $data=mysqli_query($link,$que);
    if($data)
    {
      header("location:manage.php");   
    }
    else
    {
      echo "ERROR: Could not able to execute $que. " . mysqli_error($link);
    }

  }
  else
  {
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
  }

   
    
?>