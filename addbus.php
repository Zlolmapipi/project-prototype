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
	include("headeradmin.php");
?>
<div class="row" style="background-image:url(image/4.jpg);background-size:cover;height: 800px">
	 <div class="col-lg-12 bg-brown">
		<h3 style="color:black">Hash Bus Booking</h3> 
	   <h1 style='color:white;text-shadow:7px 7px 9px black '>Travel with us! </h1>
        
        <div class="modal-dialog-text-center">
           <div class="col-sm-9 main-section" id ="form">
           	<h3>Add Route</h3>
        	
        	

       <div class="col-12 form-input">
	   <form method="POST" action="BusValidation.php">
		
		<div class="form-group">
			<input type="text" name="bname" class="form-control" placeholder=" Enter Bus Name" required>
		</div>
			<div class="form-group">
			<input type="text" name="btype" class="form-control" placeholder="Enter  Bus Type" required>
		</div>
			<div class="form-group">
			<input type="text" name="blevel" class="form-control" placeholder="Bus level" required>
		
		   <div class="form-group">
				<BUTTON  name="submit" class="btn btn-success" id= >Save</BUTTON>
		</div>
	
			</form>
			</div>
		</div>
			                
	 </div>
		
</div>
</div>
</div>
<div>
<?php
include("footer.php");
?>
</div>
</body>
</html>
