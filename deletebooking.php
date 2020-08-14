<?php
include("connection.php");
$id=$_GET['Route_id'];
$sql="delete from  route where Route_id='$id'";
$req=$conn->query($sql);
header("location:viewbooking.php");
?>