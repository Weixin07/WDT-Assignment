<?php

$server='localhost';
$username='root';
$password='';
$dbname='eco_green';

$ConnectionForStaffDatabase=mysqli_connect($server,$username,$password,$dbname);

if(mysqli_connect_errno())
{
	die('<script>alert("Connection failed. Please check your SQL connection!");</script>');
}

echo "<script>alert('Successfully connected!');</script>";

?>