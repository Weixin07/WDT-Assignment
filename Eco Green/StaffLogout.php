<?php   
session_start();  
unset($_SESSION['staff']);  
session_destroy();  
echo '<script>alert("Successfully logged out.")</script>';
echo '<script>window.location.href="StaffLoginPage.html"</script>';  
?>  