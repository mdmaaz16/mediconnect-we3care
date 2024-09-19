<?php 
$con=mysqli_connect("localhost","root","","employee"); 

if(!$con) 
{ 
	echo("ERROR".Mysqli_error()); 
} 
 
	if(isset($_POST['amr'])) 
	{ 
 
		$name1=$_POST('name'); 
			$age=$_POST("age"); 
				$address=$_POST("address"); 
					$phone_no=$_POST("phone_no"); 
						$booking_date=$_POST("booking_date"); 
 
 
						$sql1="insert into marriage(name,age,address,phone_no,booking_date) values('$name','$age','$address','$phone_no','$booking_date')"; 
 
						if(mysqli_query($con,$sql1)) 
							echo "table created"; 
						else 
							echo"not created"; 
 
 
	} 
	?> 
 
	<html> 
<STYLE> 
 
H1{ 
	color: RED 
} 
P{ 
	color: red 
} 
 
H2{ 
	color: GREEN 
 
} 
</STYLE> 
 
<body bgcolor="lightblue"> 
	<Form action = "" method="POST"> 
	<CENTER> 
		<TR> 
 
		<H1>19BCS0058- MALACK MOHAMMED AMMAR</H1> 
		<H1> MARRIAGE HALL BOOKING</H1><br> 
			<H1> BOOKING PAGE</H1><br> 
			<TABLE> 
				<tr> 
 
			<h2>ENTER NAME: 
				<input type="text" name="name" required="required"> 
				 
			<h2> ENTER YOUR AGE 
			 <input type="text" name="age" required="required"> 
			 
 
			<h2> ENTER YOUR ADDRESS 
			<input type="text" name="address" required="required"> 
 
			  
			<h2>ENTER YOUR PHONE NO 
				<input type="text" name="phone_no" required="required"> 
 
			 
			<h2>ENTER THE DATE  
				<input type="DATE" name="booking_date"></h2> 
 
					<input type="SUBMIT" name="amr"><U> </U> 
 
		</TABLE> 
 
 
 
		</CENTER> 
	</Form> 
	<CENTER> 
	<p><B> THANK YOU FOR VISITING OUR PAGE<BR><BR>$$$$$$ THIS PAGE IS DVELOPED BY MALACK MOHAMMED AMMAR $$$$$$ 
</body> 
</html> 



