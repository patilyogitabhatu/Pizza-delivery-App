<?php
$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result= mysqli_query($link,"select* from purcake order by id ASC");
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" a href="css/table.css">
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
			  <a href="http://localhost/osis_infobyte/pizzaDelivery/index.php" class="ml-2 btn btn-white btn-outline-white" style="height:40px; top:3px; text-align:center; width: 120px;">Log Out</a>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    
<br>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add New Items
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <style align="center"> 
      </style>
        <h5 class="modal-title" id="exampleModalLabel">Purchasing Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
      <form  method="post" action="puradd.php">  
        <table>
          <tr>
            <td>
            <div class="banner">
             <div class="mb-3">
                <label for="name" class="form-label"> Vender Name<span>*</span></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Enter the Vender Name" required/>
              </div>
              </td>
          </tr>
          <tr>
            <td>
            <div class="mb-3">
            <label for="name" class="form-label"> Select the items<span>*</span></label>
        	  <select name="items" class="form-control">
            <option value="time" class="form-control" disabled selected>Selecte the Items</option>
            <option value="All-purpose flour">All-purpose flour</option>
            <option value="Unsweetened natural cocoa powder">Unsweetened natural cocoa powder</option>
            <option value="Baking Soda">Baking Soda</option>
            <option value="Baking Powder">Baking Powder</option>
            <option value="Salt">Salt</option>
            <option value="Unsalted Butter">Unsalted Butter</option>
            <option value="White Sugar">White Sugar</option>
            <option value="Eggs">Eggs</option>
            <option value="Vanilla Extract">Vanilla Extract</option>
            <option value="Oreo Cookies">Oreo Cookies</option>
            <option value="Cream Cheese">Cream Cheese</option>
            <option value="Granulated Sugar">Granulated Sugar</option>
            <option value="Baking Cocoa">Baking Cocoa</option>
            <option value="Cake Flour">Cake Flour</option>
            <option value="Brown Sugar">Brown Sugar</option>
            <option value="Corn Starch">Corn Starch</option>
            <option value="Ground Cinnamon">Ground Cinnamon</option>
            <option value="Ube jam">Ube jam</option>
            <option value="Powdered Sugar">Powdered Sugar</option>
            <option value="Kosher Salt">Kosher Salt</option>
            <option value="Ground ginger">Ground ginger</option>
            <option value="Molasses">Molasses</option>
            <option value="Espresso Powder">Espresso Powder</option>
            <option value="Cream">Cream</option>
            <option value="Strawberry">Strawberry</option>
            <option value="Litchi Chopped">Litchi Chopped</option>
            <option value="Kiwi Chopped">Kiwi Chopped</option>
            <option value=" Coriander">Coriander</option>
            <option value=" Onion">Onion</option>
            <option value=" Tomato">Tomato</option>
            <option value="Garam Masala ">Garam Masala</option>
            <option value=" Pepper">Pepper</option>
            <option value=" Chaat masala">Chaat masala</option>
            <option value="Oil ">oil</option>
            <option value=" Sour Cream">Sour Cream</option>
            <option value="Whole Wheat pastry flour ">Whole Wheat pastry flour</option>
            <option value=" Cacao Butter">Cacao Butter</option>
            <option value=" Raw Cacao powder">Raw Cacao powder</option>
            <option value=" Milk Powder">Milk Powder</option>
            <option value=" Orange Extract">Orange Extract</option>
            <option value=" Coconut Oil">Coconut Oil</option>
            <option value=" Honey">Honey</option>
            <option value=" Walnuts">Walnuts</option>
            <option value=" Coco Chocolate">Coco Chocolate</option>

          </select>
          </div>
          </td>
          </tr>
          <tr>
            <td>
          <div class="mb-3">  
          <label for="state" class="form-label">Quntity<span>*</span></label>
        <input id="state" class="form-control" type="text" name="quntity" required/>
        </div>  
          </td>
          </tr>
          <tr>
            <td>
            <div class="mb-3">
            <label for="unit" class="form-label">Select the Item's unit<span>*</span></label>
          <select id="unit" class="form-control" name="unit">
            <option value="time" class="form-control" disabled selected>Select the Item's unit</option>
            <option value="kg">kg</option>
            <option value="Liter">liter</option>
            <option value="gram">gram</option>
            <option value="milliliter">milliliter</option>
            <option value="Piece">Piece</option>
		    </select>	
        </div>
          </td>
          </tr>
              
    </table>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" href="puradd.php" name="submit" onclick='return additem()'>Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<table align="center" width="100%" border="5" class="content-table">
	<tr class="active-row">
	<thead>
	<th>ID</th>
     <th>ITEMS NAME</th>
	<th>VENDER NAME</th>
	<th>QUNTITY</th>
	<th>UNIT</th>
    <th>UPDATE</th>
	<th>DELETE</th>
    </thead>	
</tr>
	<?php
	while($res=mysqli_fetch_array($result))
	{
		echo '<tr>';
		echo '<td>'.$res['id'].'</td>';
          echo '<td>'.$res['items'].'</td>';
		echo '<td>'.$res['name'].'</td>';
        echo '<td>'.$res['quntity'].'</td>';
        echo '<td>'.$res['unit'].'</td>';
		echo  "<td><a href='purEdit.php?id=$res[id]&items=$res[items]&name=$res[name]&quntity=$res[quntity]&unit=$res[unit]'><i class='fas fa-pencil-alt' style='font-size:48px;color:red'></i></a></td>";
		echo  "<td><a href='purDelete.php?id=$res[id]&items=$res[items]&name=$res[name]&quntity=$res[quntity]&unit=$res[unit]' onclick='return checkdelete()'><i class='fas fa-trash' style='font-size:36px'></i></td>";
		echo '</tr>';
	}
	?>
</table>
<script>
		function checkdelete()
		{
			return swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
		}	
</script>
    
    

    

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