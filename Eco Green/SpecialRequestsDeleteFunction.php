<?php
include('ConnectionForPickupRequest.php');

$SRId = $_GET['id'];

$delsql = "DELETE FROM special_requests WHERE SR_ID = '".$SRId."'";

 if(mysqli_query($eco_green,$delsql))
	 echo '<script>alert("Request has been successfuly deleted.")</script>';
else
	 echo'<script>alert("Failed to delete. Please try again.")</script>';
 
 mysqli_close($eco_green);
 
 echo '<script>window.location.href="Special_Requests.php"</script>';
 
?>