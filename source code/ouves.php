<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo mysqli_error($con);
}
else
{
	echo"connection successfully"."<br>";

}
$q1=mysqli_query($con,"CREATE DATABASE OUVESUU");
if(!$q1)
{
	echo mysqli_error($con);
}
else
{
	echo "Created successfully:";
}
if(mysqli_select_db($con,OUVESUU))
{
	echo "Database selected successfully:";
}
else
{
	echo "Database not selected";
}
$q="CREATE TABLE ouves(mobile_number INT(10),name VARCHAR(20))";

if(mysqli_query($con,$q))
{
	echo "TABLE CREATED successfully";
	echo"<br>";
}
else
{
		echo "TABLE NOT CREATED ";
	echo"<br>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>19BCS0024</title>
</head>
<body>
<hr>
<form>
	<fieldset>
		<legend>OUVES FORMS</legend>
	<label>LOGIN USING MOBILE NUMBER:</label>
	<input type="number" name="mb" placeholder="Enter your mobile number"><br>
	<label>NAME </label>
	<input type="text" name="mib" placeholder="Enter your name"><br>
	<input type="submit" name="submit"><br>
	</fieldset>
</form>
</body>
</html>