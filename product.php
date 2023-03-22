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
                <li class="nav-item"><a href="manage.php" class="nav-link">Manage Ingredients</a></li>
                <li class="nav-item active"><a href="product.php" class="nav-link">Pizza Types</a></li>
              </ul>
			  <a href="http://localhost/osis_infobyte/pizzaDelivery/index.php" class="ml-2 btn btn-white btn-outline-white" style="height:40px; top:3px; text-align:center; width: 120px;">Log Out</a>
	      </div>
		  </div>
	  </nav>
   
    <!-- END nav -->	
        
        <link rel="stylesheet" a href="css/table.css">
            <br>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Add New Pizza Type

            </button>
            <!-- Modal --> 
            <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <style align="center"> 
                    </style>
                      <h5 class="modal-title" id="exampleModalLabel">Add Pizza Types</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form  method="post" action="itempizzadd.php">  
                    <table>
                    <tr>
                    <td>
                      <div class="banner">
                        <div class="mb-3">
                              <label for="pid" class="form-label">Pizza Id<span>*</span></label>
                              <input id="pid"  class="form-control" type="number" name="pid" placeholder="Enter the Pizza ID" required/>   
                        </div>   
                        </td>
                        </tr>
                        <tr>
                        <td>   
                        <div class="mb-3">
                             <label for="pname" class="form-label">Pizza Name<span>*</span></label>
                             <input id="pname"  class="form-control" type="text" name="pname" placeholder="Enter the Pizza name" required/>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <div class="mb-3">
                             <div class="name" class="form-label">Upload Pizza Image</div>
                             <input  type="file" name="pimg"  class="form-control" id="file">
                        </div>
                        </td>
                        </tr>

                        <tr>
                        <td>
                        <div class="mb-3">
                             <label for="pprice" class="form-label">Pizza Price<span>*</span></label>
                             <input id="pprice" type="text" name="pprice"  class="form-control" placeholder="Enter the Pizza Price" required/>
                        </div>  
                        </td>
                        </tr>
                        <tr>
                        <td>
                              <label for="pingre" class="form-label">Cakes Ingredints<span>*</span></label>
                              <textarea id="pingre" name="pingre"  class="form-control" placeholder="Enter the Ingredints" rows="4" cols="50" ></textarea>
                        </td>
                        </tr>
                        </table>          
                  
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button class="btn btn-primary" type="submit" href="itempizzadd.php" name="submit" onclick='return additem()'>Save</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <script>
                    function additem(){swal({
                title: "Record Added Successfully!",
                text: "You clicked the button!",
                icon: "success",
                button: "Aww yiss!",
              }); 
                    }
                    </script>
                    <?php
              $link = mysqli_connect("localhost", "root", "", "pizza");
               
              // Check connection
              if($link === false)
              {
                  die("ERROR: Could not connect. " . mysqli_connect_error());
              }
              $result= mysqli_query($link,"select* from pizzaitem order by pid ASC");
              ?>
              <table align="center" width="100%" border="5" class="content-table">
                <tr class="active-row">
                <thead>
                <th>PIZZA ID</th>
                <th>PIZZA NAME</th>
                <th>PIZZA IMAGE</th>
                <th>PIZZA INGREDIENTS</th>      
                <th>PIZZA PRICE</th>
                   <th>DELETE</th>
                  </thead>	
              </tr>
                <?php
                while($res=mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td>'.$res['pid'].'</td>';
                  echo '<td>'.$res['pname'].'</td>';
                  echo '<td><img src="'.$res['pimg'].'" style="width:200px;height:150px;"></td>';	    
                  echo '<td>'.$res['pingre'].'</td>';                 
                  echo '<td>'.$res['pprice'].'</td>';
                  echo  "<td><a href='itempizzaDelete.php?pid=$res[pid]&pname=$res[pname]&pimg=$res[pimg]&pingre=$res[pingre]&pprice=$res[pprice]'onclick='return checkitemdelete()'><i class='fas fa-trash' style='font-size:36px'></i></td>";
                  echo '</tr>';
                }
                ?>
              </table>
              <script>
                  function checkitemdelete()
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