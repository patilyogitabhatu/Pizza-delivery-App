<?php
  $link = mysqli_connect("localhost", "root", "", "pizza");
 
  // Check connection
  if($link === false)
  {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
	error_reporting(0);
     $pid=$_GET['pid'];
	$pname=$_GET['pname'];
	$pimg=$_GET['pimg'];
	$pingre=$_GET['pingre'];	
     $pprice=$_GET['pprice'];		
	$d=mysqli_query("select * from pizzaitem where pid='$pid';");
	$check=mysqli_fetch_array($d);
?> 
<html>
  <head>
<title>Pizza Types Update Form</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    	
<link rel="stylesheet" a href="css/pur.css">
  </head>
  <body>
  <style align="center"> 
      body{background-image:url('images/br_1.jpg');background-repeat:no-repeat;background-size:cover;}
      </style>
    <div class="testbox">
      <form  method="post" action="">   
        <div class="banner">
          <h1>PIZZA</h1>
        </div>
        <br>
        <br>
        <table>
          <tr>
            <td>
                <div class="item">
                <label for="name">PIZZA ID<span>*</span></label>
                <input id="name" type="number" name="pid" value="<?php echo "$pid"?>" required/>
                </div>
              </td>
              <td>
              <div class="item">
                    <label for="coname">PIZZA NAME<span>*</span></label>
                    <input id="coname" type="text" name="pname" value="<?php echo "$pname"?>" required/>
                    </div>
              </td>
              <td>
              </td>
              <tr>
              <td>
               <div class="item">
                    <div class="name">UPLOAD PIZZA IMAGE</div>
                         <input  type="file" name="pimg" id="file">
                         <label  for="file" name="pimg" value="<?php echo "$pimg"?>">Choose file</label>
                    </div>
               </div>
                </td>
                <td>
                <div class="item">
                    <label for="pprice">PIZZA PRICE<span>*</span></label>
                     <input id="pprice" type="text" name="pprice" value="<?php echo "$pprice"?>" required/>
               </div>
                </td>     
                <td>
                <div class="item">
                              <label for="pingre">PIZAA INGREDENTS<span>*</span></label>
                               <textarea id="pingre" name="pingre" rows="4" cols="50" ><?php echo $pingre; ?></textarea>
                         </div>
                
                </td>
               </tr>
               
               <tr>
                    <td>
                    </td>
                    <td>
                    <div class="btn-block">
                    <button type="submit" href="product.php" onclick='return checkupdate()' name="update">Update</button>
                    </div>
               </td>
        </tr>
      </form>
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
    $pid=$_POST['pid'];
	$pname=$_POST['coname'];
    $pimg=$_POST['coimg'];
	$pingre=$_POST['coingre'];	
    $pprice=$_POST['coprice'];
    $query= "UPDATE pizzaitem SET pname='$pname',pimg='$pimg',pingre='$pingre',pprice='$pprice' WHERE pid='$pid'";
	$data=mysqli_query($link,$query);
	if($data)
	{
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=product.php">
        <?php
 
	}
	else
	{
		echo"failed";
	}
}	
?>
