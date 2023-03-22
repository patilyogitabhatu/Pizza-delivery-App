<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <link rel="stylesheet" href="css/mystyle.css">
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
                <li class="nav-item"><a href="pur.php" class="nav-link">Purchasing Product</a></li>
                <li class="nav-item active"><a href="manage.php" class="nav-link">Manage Ingredients</a></li>
                <li class="nav-item"><a href="product.php" class="nav-link">Pizza Types</a></li>
              </ul>
			  <a href="http://localhost/osis_infobyte/pizzaDelivery/index.php" class="ml-2 btn btn-white btn-outline-white" style="height:40px; top:3px; text-align:center; width: 120px;">Log Out</a>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    <script>
 
  </script>
  <script language="JavaScript">
    function showInput() {
        document.getElementById('display').innerHTML = 
                    document.getElementById("user_input").value;
    }
  </script>
  
      <link rel="stylesheet" a href="css/table.css">
      <?php
$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
 <form  method="post" action="">  
<table align="center" width="100%" border="5" class="content-table">
	<tr class="active-row">
	<thead>
	<th>ITEMS NAME</th>
     <th>USED QUNTITY</th>
     <th>UNIT</th>
     <th>ADD</th>
    </thead>	
</tr>
	<tr>
     <td><select name="item" id="item"  class="form-control">
                              <?php 
                                 $sql = "SELECT * FROM purcake";
                                 $query = mysqli_query($link,$sql);
                                 while($row = mysqli_fetch_assoc($query)){
                                 ?>
                              <option id="<?php echo $row['id']; ?>" value="<?php echo $row['items']; ?>" class="vegitable custom-select">
                                 <?php echo $row['items']; ?>
                              </option>
                              <?php  }?>   
                           </select></td>
     <td style="width:15%">
        <input type="text" min="0" value="0" name="qty" class="form-control">
     </td>
     <td style="width:15%">
        <input type="text"  name="unit" class="form-control">
     </td>    
     <td>
     <input type="submit"  name="add" value="ADD" class="btn btn-dark">
     </td>                
     </tr>
</table>
</form>
<h2 align="center" style="color:white;"><i>Ingredients Used Fro product</i></h2>
<?php
$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result= mysqli_query($link,"select* from card");
?>
<table align="center" width="100%" border="5" class="content-table">
	<tr class="active-row">
	<thead>
	<th>ITEMS NAME</th>
     <th>USED QUNTITY</th>
     <th>UNIT</th>
    </thead>	
</tr>
	<?php
	while($res=mysqli_fetch_array($result))
	{
		echo '<tr>';
		echo '<td>'.$res['item'].'</td>';
          echo '<td>'.$res['qty'].'</td>';
          echo '<td>'.$res['unit'].'</td>';
		
		echo '</tr>';
	}
	?>
</table>
<center> 
<!-- Button trigger modal -->
<button type="button"   class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Enter Todays Information
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="post" action="manCon.php"> 
      <div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Todays Date</label>
				  			<div class="col-sm-6">
				  				<input type="date" id="order_date" name="t_date" class="form-control form-control-sm" value="<?php echo date("d-m-y"); ?>">
				  			</div>
				  		</div>
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Admin Name</label>
				  			<div class="col-sm-6">
				  				<input type="text" id="cust_name" name="a_name"class="form-control form-control-sm" placeholder="Enter Admin Name" required/>
				  			</div>
				  		</div>  
      </div>
      <div class="modal-footer">
     
<center> 
<input type="submit"  name="del" value="Submit" onclick='return checksubmit()'  class="btn btn-secondary btn-lg">
</center>
</form>

      </div>
    </div>
  </div>
</div>
</center>


<?php	
	if(isset($_POST['add']))
{
  $link = mysqli_connect("localhost", "root", "", "pizza");
  if($link === false)
  {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
$item = mysqli_real_escape_string($link, $_REQUEST['item']);
$qty = mysqli_real_escape_string($link, $_REQUEST['qty']);
$unit = mysqli_real_escape_string($link, $_REQUEST['unit']);

// Attempt insert query execution
$sql = "INSERT INTO card (item,qty,unit) VALUES ('$item','$qty','$unit')";
if(mysqli_query($link, $sql)){
     $item = $_POST['item'];
     $qty = $_POST['qty'];
     $link = mysqli_connect("localhost", "root", "", "pizza");
    
     // Check connection
     if($link === false)
     {
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }
     
     $result= mysqli_query($link,"select quntity from purcake where items='$item'");
     
       while($res=mysqli_fetch_array($result))
       {
         
            $quntity=$res['quntity'];   
       }    
     $item = $_POST['item'];
     $qty = $_POST['qty'];
   
     $quntity -=$qty;
   
     $stmt = $link->prepare('UPDATE purcake SET quntity=? WHERE items=?');
     $stmt->bind_param('is',$quntity,$item);
     $stmt->execute();
    
     ?>
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=manage.php">
     <?php
} 
else
{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}	
?>

    
    

    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>