<HTML>
<HEAD>
<TITLE>Eco Green Requests Management Site</TITLE>
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
    color: green;  
    font-family: verdana;  
    font-size: 250%;  
}  
         h2 {  
    color: green;  
    font-family: verdana;  
    font-size: 300%;  
}</style>  
</HEAD>
<BODY>
<H1>Special Requests</H1>
<p align = "left"><a href="StaffMainPage.php">Main Page</a>| <a href="StaffLogout.php">Logout</a></p>
<br><br>
<table border=1>
<TH>Name</TH>
<TH>Contact Number</TH>
<TH>Status</TH>
<th>Confirm Request</th>
<th>Delete Request</th>

<?php
	include('ConnectionForPickupRequest.php');
	
	$sql = 'SELECT * FROM special_requests';
	$result = mysqli_query($eco_green, $sql);
	
	if (mysqli_affected_rows($eco_green)>0){
		for($i = 0; $i < mysqli_num_rows($result);$i++){
			$rows = mysqli_fetch_assoc($result);
			
			echo '<tr>';
            echo '<td>'.$rows ['Name'].'</td>';
            echo '<td>'.$rows ['Contact_Number'].'</td>';
            echo '<td>'.$rows ['Status'].'</td>';
            echo "<td><a href='ChangeStatusToConfirmSR.php?id=".$rows["SR_ID"]."'><button>Confirm</button></a></td>";
            echo "<td><a href='SpecialRequestsDeleteFunction.php?id=".$rows["SR_ID"]."'><button>Delete</button></a></td>";
			echo '</tr>';

		}
		echo '</table>';
    }	
    
    mysqli_free_result($result);
    mysqli_close($eco_green);
    
	?>

</BODY>
</HTML>