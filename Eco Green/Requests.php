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
<H1>Requests</H1>
<p align = "left"><a href="StaffMainPage.php">Main Page</a>| <a href="StaffLogout.php">Logout</a></p>
<br><br>
<table border=1>
<TH>Name</TH>
<TH>Address</TH>
<TH>Contact Number</TH>
<TH>E-Mail</TH>
<TH>Paper</TH>
<TH>Plastic</TH>
<TH>Metal</TH>
<TH>Cardboard Box</TH>
<TH>OtherYN</TH>
<TH>Date</TH>
<TH>Time</TH>
<TH>Status</TH>
<th>Confirm Request</th>
<th>Delete Request</th>

<?php
	include('ConnectionForPickupRequest.php');
	
	$sql = 'SELECT * FROM users';
	$result = mysqli_query($eco_green, $sql);
	
	if (mysqli_affected_rows($eco_green)>0){
		for($i = 0; $i < mysqli_num_rows($result);$i++){
			$rows = mysqli_fetch_assoc($result);
			
			echo '<tr>';
            echo '<td>'.$rows ['Name'].'</td>';
            echo '<td>'.$rows ['Address'].'</td>';
            echo '<td>'.$rows ['Contact_Number'].'</td>';
            echo '<td>'.$rows ['Email'].'</td>';
            echo '<td>'.$rows ['Paper'].'</td>';
            echo '<td>'.$rows ['Plastic'].'</td>';
            echo '<td>'.$rows ['Metal'].'</td>';
            echo '<td>'.$rows ['Cardboard_Box'].'</td>';
            echo '<td>'.$rows ['Others'].'</td>';
			echo '<td>'.$rows ['Date_Requested'].'</td>';
            echo '<td>'.$rows ['Time_Requested'].'</td>';
            echo '<td>'.$rows ['Status'].'</td>';
            echo "<td><a href='ChangeStatusToConfirm.php?id=".$rows["User_ID"]."'><button>Confirm</button></a></td>";
            echo "<td><a href='RequestsDeleteFunction.php?id=".$rows["User_ID"]."'><button>Delete</button></a></td>";
			echo '</tr>';

		}
		echo '</table>';
    }	
    
	mysqli_free_result($result);
    mysqli_close($eco_green);
    
	?>

</BODY>
</HTML>