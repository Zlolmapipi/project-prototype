<?php
include("connection.php");
$id=$_GET['id'];
$sql="delete from  buses where Bus_id='$id'";
$req=$conn->query($sql);
header("location:viewbus.php");
?>