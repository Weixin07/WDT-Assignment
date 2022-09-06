<?php
include('ConnectionForPickupRequest.php');

$UserId = $_GET['id'];

$delsql = "DELETE FROM users WHERE User_ID = '".$UserId."'";

 if(mysqli_query($eco_green,$delsql))
	 echo '<script>alert("Request has been successfuly deleted.")</script>';
else
	 echo'<script>alert("Failed to delete. Please try again.")</script>';
 
 mysqli_close($eco_green);
 
 echo '<script>window.location.href="Requests.php"</script>';
 
?>