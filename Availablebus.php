 <!DOCTYPE html>
 <html>
 <head>
 	<title>available</title>
 </head>
 <body>
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
	<div>
	<?php
	include("header.php");
	?>

<div class="row" style="background-image:url(image/4.jpg);background-size:cover;height: 800px">
	 <div class="col-lg-12 bg-brown">
		<h3 style="color:black">Hash Bus Booking</h3> 
	   <h1 style='color:white;text-shadow:7px 7px 9px black '>Travel with us! </h1>
        
        <div class="modal-dialog-text-center">
           <div class="col-sm-9 main-section" id ="form">
        	
        	

       <div class="col-12 form-input">
	   <form method="POST" action="search.php">
	   	<div class="form-group">
			<input type="text" list="from" name="from" class="form-control" placeholder="From">
		<datalist id="from">
			<?php
				include("connection.php");
				$sql="select r_from from route";
				$req=$conn->query($sql);
				while($row=$req->fetch(PDO::FETCH_ASSOC)){
					?>
						<option value="<?php echo $row['r_from']; ?>">
					<?php
				}

			?>
		</datalist>
		</div>
		<div class="form-group">
				<input type="text" name="to"  list="to" class="form-control" placeholder="to">

				<datalist id="to">
					<?php
					$sql="select r_to from route";
				$req=$conn->query($sql);
				while($row=$req->fetch(PDO::FETCH_ASSOC)){
					?>
						<option value="<?php echo $row['r_to']; ?>">
					<?php
				}

					?>
				</datalist>
		</div>
		<div class="form-group">
				<input type="date" name="rdate" class="form-control" placeholder="Date">
		</div>

		<div class="form-group">
				<input type="submit" name="submit" value="Check Availability" class="btn btn-primary btn-sm" id="" />
		</div>

			</form>
		</div>
		</div>
			                
	 </div>


</div>
 <div>
	 <?php
	include("footer.php");
	?>
	</div>
	</div>


 
 </body>
 </html>