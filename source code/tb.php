<?php 
$con=mysqli_connect("localhost","root","","employee"); 
if(!$con) 
{ 
	echo("ERROR".Mysqli_error()); 
 
} 
$sql="Create table marriage(Name varchar(10) primary key,age varchar(10),address varchar(10),phone_no varchar(10),Booking_date varchar(10))"; 
 
if ( mysqli_query($con,$sql)) 
 
echo("table created"); 
 
else 
 
echo("error".Mysqli_error()); 
 
?> 
