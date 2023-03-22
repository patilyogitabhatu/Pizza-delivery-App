<?php
  $link = mysqli_connect("localhost", "root", "", "pizza");
 
  // Check connection
  if($link === false)
  {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
	error_reporting(0);
     $items=$_GET['items'];
	$name=$_GET['name'];
	$tdate=$_GET['tdate'];
	$ddate=$_GET['ddate'];	
    $quntity=$_GET['quntity'];	
    $unit=$_GET['unit'];	
    $price=$_GET['price'];
    $method=$_GET['method'];		
	$d=mysqli_query("select * from purcake where items='$items';");
	$check=mysqli_fetch_array($d);
?> 
<html>
  <head>
  <title>Pizza</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" a href="css/table.css">
    <link rel="stylesheet" a href="css/pur.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>JOHNS</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item active"><a href="pur.php" class="nav-link">Purchasing Product</a></li>
                <li class="nav-item"><a href="manage.php" class="nav-link">Manage Ingredients</a></li>
                <li class="nav-item"><a href="product.php" class="nav-link">Pizza Types</a></li>
              </ul>
              <a href="#" class="ml-2 btn btn-white btn-outline-white" style="height:40px; top:3px; text-align:center; width: 120px;">Log Out</a>
	         </div>
		  </div>
	  </nav>
 
      <div class="testbox">
      <form  method="post" action="">  
        <div class="banner">
          <h1> Raw Material Purchasing Form</h1>
        </div>
        <br>
        <br>
        <table>
          <tr>
            <td>
                <div class="item">
                <label for="name"> Vender Name<span>*</span></label>
                <input id="name" type="text" name="name" value="<?php echo "$name"?>" placeholder="Enter the Vender Name" required/>
                </div>
              </td>
              <td>
              </td>
              <td>
             <div class="item">
            <label for="name"> Selected item for Pizza<span>*</span></label>
            <input type="text" name="items"  value="<?php echo "$items"?>">
        </div>
      </td>
    </tr>  
    <tr>
      <td> 
      <div class="item">
          <label for="state">Quntity<span>*</span></label>
          <input id="state" type="text" value="<?php echo "$quntity"?>" name="quntity" required/>
        </div>

      </td> 
      <td>

      </td>   
      <td>
      <div class="item">
        <label for="state">Unit<span>*</span></label>
          <input id="state" type="text" value="<?php echo "$unit"?>" name="unit" required/>
        </div>

      </td>
    </tr>
          
        <tr>
          <td></td>
        <td><div class="btn-block">
          <button type="submit" href="pur.php" onclick='return checkupdate()'  name="update" value="update">Update</button>
        </div>
        </td>
        </tr> 
      </form>
    </div>
</table>
  </body>
</html>
<script>
  	function checkupdate(){
			return swal({
  title: "Record Updated Successfully!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
		}
</script>
<?php	
	if(isset($_POST[update]))
{
    $items=$_POST['items'];
	$name=$_POST['name'];
  $quntity+=$_POST['quntity'];	
   $unit=$_POST['unit'];	
	$query= "UPDATE purcake SET name='$name',quntity='$quntity',unit='$unit' WHERE items='$items'";
	$data=mysqli_query($link,$query);
	if($data)
	{
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=pur.php">
        <?php
 
	}
	else
	{
		echo"failed";
	}
}	
?>

