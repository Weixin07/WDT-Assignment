<?php
include("ConnectionForPickupRequest.php");

$name = $_POST['name'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email_address'];
$address = $_POST['address'];
$paper = $_POST['paper'];
$plastic = $_POST['plastic'];
$metal = $_POST['metal'];
$cardboard_box = $_POST['cardboard_box'];
$othersyn = $_POST['othersyn'];
$others = $_POST['others'];
$preferable_date = $_POST['preferable_date'];
$preferable_time = $_POST['preferable_time'];

$sql = "INSERT into users(Name, Contact_Number, Email, Address, Paper, Plastic, Metal, Cardboard_Box, Others, Date_Requested, Time_Requested, Status) Values
('".$name."','".$contact_number."','".$email."','".$address."','".$paper."','".$plastic."','".$metal."','".$cardboard_box."','".$othersyn."' ,
'".$preferable_date."','".$preferable_time."','Unconfirmed');";
echo $sql;

$sql1 = "INSERT into special_requests(Name, Contact_Number, Status) Values
('".$others."', '".$contact_number."','Unconfirmed');";
echo $sql1;

mysqli_query($eco_green, $sql);
mysqli_query($eco_green, $sql1);

if(mysqli_affected_rows($eco_green) <=0)
{
	die("<script>alert('Fail: Unable to submit, please retry.');window.history.go(-1);</script>");
	
}
echo "<script>alert('Successfully requested!')</script>";
	echo "<script>window.location.href='PickupRequest.html';</script>";
?>