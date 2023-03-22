<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pizza</title>
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
                <li class="nav-item active"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="pur.php" class="nav-link">Purchasing Product</a></li>
                <li class="nav-item"><a href="manage.php" class="nav-link">Manage Ingredients</a></li>
                <li class="nav-item"><a href="product.php" class="nav-link">Pizza Types</a></li>
              </ul>
			  <a href="http://localhost/osis_infobyte/pizzaDelivery/index.php" class="ml-2 btn btn-white btn-outline-white" style="height:40px; top:3px; text-align:center; width: 120px;">Log Out</a>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    
    <h2 align="center" style="color:white;"><i>Customer Information</i></h2>
      <link rel="stylesheet" a href="http://localhost/db_pr/table2.css">
      <?php
$link = mysqli_connect("localhost", "root", "", "pizza");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$result= mysqli_query($link,"select* from orders order by custo_id desc");
?>
<table align="center" width="100%" border="5" class="content-table">
	<tr class="active-row">
	<thead>
  <th>CUSTOMER ID</th>
	<th>CUSTOMER NAME</th>
	<th>CUSTOMER MAIL</th>
	<th>CUSTOMER PHONE NO</th>
	<th>DELIVERY ADDRESS</th>
	<th>ORDER TYPE</th>
  <th>DELIVERY DATE</th>
  <th>DELIVERY TIME</th>
  <th>PURCHASED PRODUCTS</th>
  <th>PAID AMOUNT</th>
    </thead>	
</tr>
	<?php
	while($res=mysqli_fetch_array($result))
	{
		echo '<tr>';
		echo '<td>'.$res['custo_id'].'</td>';
    echo '<td>'.$res['custo_name'].'</td>';
		echo '<td>'.$res['custo_mail'].'</td>';  
    echo '<td>'.$res['custo_phone'].'</td>';  
    echo '<td>'.$res['del_add'].'</td>';  
    echo '<td>'.$res['t_order'].'</td>';  
    echo '<td>'.$res['d_date'].'</td>';  
		echo '<td>'.$res['d_time'].'</td>';
    echo '<td>'.$res['products'].'</td>';  
    echo '<td>'.$res['amount_paid'].'</td>';  
		echo '</tr>';
	}
	?>
</table>


<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg); hight: 10%; width: 100%;">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <section class="ftco-section ftco-services">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                      <h2 class="mb-4">Our Services</h2>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 ftco-animate">
                      <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                          <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                          <h3 class="heading">Healthy Foods</h3>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                      </div>      
                    </div>
                    <div class="col-md-4 ftco-animate">
                      <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                          <span class="flaticon-bicycle"></span>
                        </div>
                        <div class="media-body">
                          <h3 class="heading">Fastest Delivery</h3>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                      </div>      
                    </div>
                    <div class="col-md-4 ftco-animate">
                      <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                        <div class="media-body">
                          <h3 class="heading">Original Recipes</h3>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                      </div>    
                    </div>
                  </div>
                </div>
              </section>	
            </div>

          </div>
        </div>
      </div>
    </section>



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