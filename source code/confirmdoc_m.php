<?php
$con=mysqli_connect("localhost","root","","healthcare");
$sql = "select * from dup_doc where doc_id='".$_GET['id']."'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		.b1{
			width: 100%;
			height: 100px;
			background-color: red;
		}
		.b2{
			padding: 20px;
			background-color: grey;
		}
	</style>
</head>
<body>
	<div class="b1"></div><br>
	<div class="card w-70 mx-auto b2">
		<div class="container overflow-hidden">
			<div class="row gy-5">
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Name:</b> Dr.".$row[0];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Phone Number: </b>".$row[1];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Email: </b>".$row[2];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Degree: </b>".$row[3];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Years of experience: </b>".$row[4];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Specialization: </b>".$row[5];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Charges: </b>".$row[6];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Address: </b>".$row[7];?></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>File : </b>"?><a class="btn btn-primary" href="download.php?file=<?php echo $row[8];?>">Download</a></div>
				</div>
				<div class="col-5">
					<div class="p-2 border bg-light"><?php echo "<b>Diseases: </b>".$row[9];?></div>
				</div>
				<div class="col-5 mx-auto">
					<div class="p-2 border mx-auto bg-light"><?php echo "<b>Doctor id: </b>".$row[10];?></div>
				</div>
				
			</div>
		</div>
	</div>
	<br>
	<?php 
	function generateRandomString($length = 25) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	$myRandomString = generateRandomString(8);
	?>
	<div class="card mx-auto" style="width: 18rem; ">
		<ul class="list-group list-group-flush">
			<li class="list-group-item"><?php echo "<b>Username:</b> $row[0]";?></li>
			<li class="list-group-item"><?php echo "<b>Password:</b> $myRandomString";?></li>
			
		</ul>
	</div>
	<br>
	<div class="card w-25 mx-auto">
		<div class="card-body mx-auto">
			<form method="post">
				<input type="submit" name="submit" class="btn btn-secondary" value="Approve">
				<button class="btn btn-secondary ">Do not Approve</button>
			</form>
		</div>
	</div>
	<?php
	if(isset($_POST['submit']))
	{
		$a=$row[10];
		$b=$row[0];
		$c=$myRandomString;
		$d=$row[0];
		$e=$row[1];
		$f=$row[2];
		$g=$row[3];
		$h=$row[4];
		$i=$row[5];
		$j=$row[6];
		$k=$row[7];
		$l=$row[8];
		$m=$row[9];
		
		$sql="insert into doctor(doctor_id,username,password,name,phone_number,email,degree,years_of_exp,specialization,charges,address,file,diseases) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')"; 
		
		if(!(mysqli_query($con,$sql)))
		{
			echo "error".mysqli_error($con);
		}

		$sql1 ="delete from dup_doc where doc_id=$row[10]";
		if(!(mysqli_query($con,$sql1)))
		{
			echo "error".mysqli_error($con);
		}
		$to = $row[2];
//echo $to;
		$subject = "Thank you! Your application has been Approved";
		$txt = "Your Application has been reviewed by our team. We are happy to inform you that your application has bee approved...feel free to contact us if you have any queries \n\n Username: $b \n Password: $c ";
		$headers = "From: maaz1820099@gmail.com" . "\r\n" ."CC: maazm2708@gmail.com";
		mail($to,$subject,$txt,$headers);
		echo '<script type="text/javascript">';
		echo 'window.location.href = "dup_admin.php";';
		echo '</script>';
	}

	?>
	<br>
	<div class="b1"></div>

</body>
</html>