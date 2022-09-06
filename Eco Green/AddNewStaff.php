<?php

include("ConnectionForStaffDatabase.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "insert into staff (Username, Password) Values
('".$username."','".$password."')";

if(!mysqli_query($ConnectionForStaffDatabase,$sql))
{
	echo '<script>alert("Registration Failed. Please try again.");
	window.location.href= "StaffRegistrationPage.php";
	</script>';
}
else
{
	echo '<script>alert("User has been added!");
	window.location.href= "StaffRegistrationPage.php";
	</script>';
}

?>