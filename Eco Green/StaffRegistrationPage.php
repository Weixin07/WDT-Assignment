<!doctype html>  
<html>  
<head>  
<title>Register</title>  
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
            h1 {  
    color: GREEN;  
    font-family: verdana;  
    font-size: 250%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}</style>  
</head>  
<body>  
     
    <center><h1>ECO GREEN</h1></center>  
   <p><a href="StaffRegistrationPage.php">Register</a> | <a href="StaffLoginPage.html">Login</a></p>  
    <center><h2>Registration Form</h2></center>  
<form action="AddNewStaff.php" method="POST">  
    <legend>  
    <fieldset>  
          
Username: <input type="text" name="username"><br />  
Password: <input type="password" name="password"><br />   
<input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  

</body>  
</html>   