<?php
session_start();

include("ConnectionForStaffDatabase.php");

$sql = "select * from staff where Username = '".$_POST['username']."' and Password = '".$_POST['password']."'";

$logininfo = mysqli_query($ConnectionForStaffDatabase, $sql);

if(mysqli_num_rows($logininfo)==1){
	$row = mysqli_fetch_assoc($logininfo);
	$_SESSION['staff'] = $row['Username'];
	echo '<script>alert("Login Successful!");</script>';
	echo '<script>window.location.href = "StaffMainPage.php";</script>';
}
else{
	echo '<script>alert("User does not exist or Incorrect password is input. Please try again.");</script>';
	echo '<script>window.location.href = "StaffLoginPage.html";</script>';
	
	}
?>