<?php
include('ConnectionForPickupRequest.php');

$id = $_GET['id'];

$sql = "UPDATE users SET Status = 'Confirmed' where User_ID= '$id'";

if(mysqli_query($eco_green,$sql))
	 echo '<script>alert("Succesfully Confirmed!")</script>';
else
	 echo'<script>alert("Confirmation failed. Please try again.")</script>';
 
 mysqli_close($eco_green);
 
 echo '<script>window.location.href="Requests.php"</script>';
 
?>