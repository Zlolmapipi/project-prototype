<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="bootstrap-4.3.1-dist\js\bootstrap.min.js"></script>
<body>
<?php
	include("header.php");
?>
<div class="row" style="background-image:url(image/4.jpg);background-size:cover;height: 800px">
	 <div class="col-lg-12 bg-brown">
		<h3 style="color:black">Hash Bus Booking</h3> 
	   <h1 style='color:white;text-shadow:7px 7px 9px black '>Travel with us! </h1>
        
        <div class="modal-dialog-text-center">
           <div class="col-sm-9 main-section" id ="form">
           	<h3>Booking</h3>
        	
        	

       <div class="col-12 form-input">
	   <form method="POST" action="BookingValidation.php">
	   	<div class="form-group">
			<input type="text/email" name="name" class="form-control" placeholder="Enter Username">
		</div>
		<div class="form-group">
				<input type="Password" name="password" class="form-control" placeholder="Enter Password">
		</div>
		<div class="form-group">
			<input type="text" name="fname" class="form-control" placeholder="Enter your Fullname">
		</div>
		<div class="form-group">
			<input type="text" name="address" class="form-control" placeholder="Enter your address">
		</div>
		<div class="form-group">
			<input type="number" name="fphone" class="form-control" placeholder="Enter your phonenumber">
         <input type="hidden" name="Rout_id" value="<?php  echo $_GET['id'];?>">
		</div>
			<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Enter your Email">
		</div>
		<div class="form-group">
			<input type="number" name="pnumber" class="form-control" placeholder="Enter your no of people">
		</div>
		   <div class="form-group">
				<BUTTON  name="submit" class="btn btn-primary" id= >Save</BUTTON>
		</div>
	
			</form>
			</div>
		</div>
			                
	 </div>
		
</div>
</div>
</div>

</body>
</html>


