<?php   
session_start();  
if(!isset($_SESSION['staff'])){  
	echo '<script>alert("You are not logged in. Please log in to view this page.")</script>;';
	echo '<script>window.location.href="StaffLoginPage.html"</script>';
} else {
?>

<!doctype html>  
<html>  
<head>  
<title>Eco Green Requests Management Site</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: GREEN;  
    font-family: verdana;  
    font-size: 300%;  
}  
              
          
    </style>  
</head>  
<body>  
<p><a href="Requests.php">Check Requests</a> |<a href="Special_Requests.php">Check Special Requests</a> | <a href = "StaffLogout.php">Log Out</a> </p>
    <center><h1>ECO GREEN</h1></center>  
    
    <?php
echo "<h2>Welcome back, ".$_SESSION['staff'].".</h2>";
echo 'How are you today?';
?>

    <?php
}
?>  
