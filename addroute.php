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
	   <form method="POST" action="RouteValidation.php">
		<div class="form-group">
			<input type="text" name="rfrom" class="form-control" placeholder=" Enter Route From">
		</div>
			<div class="form-group">
			<input type="text" name="rto" class="form-control" placeholder="Enter Route to">
			</div>
			<div class="form-group">
			<Select type="text" name="bname" class="form-control">
				<option value="">Select Bus</option>
				<?php
					include("connection.php");
					$sql="select * from buses";
					$req=$conn->query($sql);
					
					while($row=$req->fetch(PDO::FETCH_ASSOC)){
						?>
						<option value="<?php echo $row['Bus_id']; ?>"><?php echo $row['Bus_name']; ?></option>
						<?php
					}
				?>
			</Select>

		
		</div>
			<div class="form-group">
			<input type="text" name="rcost" class="form-control" placeholder="Cost">
		</div>
			<div class="form-group">
			<input type="Date" name="rdate" class="form-control" placeholder="Date">
		</div>
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
