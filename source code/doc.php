<html>
<head>
	<style>
	 body {
    background: -webkit-linear-gradient(left, #2930af, #40c8ff);

    background-size: cover;
}
.b4{
	width: 100%;
	border: 2px solid;
	height: 100px;
	background-color: powderblue;
}
.b1{
	width: 600px;
	height: 440px;
	background: pink;
	border: 1px solid;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
margin-top: 50px;
}
.b2{
	width: 220px;
	height: 130px;
	background: red;
	position: absolute;
	right: 100px;
	top: 220px;
	border: 1px solid;
	box-shadow: 20px;
	padding: 10px;
}
.b2:hover{
	background: grey;
	width: 230px;
}
.b3{
	position: absolute;
	top: 200px;
	left: 100px;
}
.inpborder{
    border-radius: 8px;
    border: none;
    margin: 4px;
    background: lightgrey;
    color: black;
    width: 40%;
    height: 8%;
}
.addre{
	background:lightgrey ;
	border: none;
	border-radius:8px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
	
	<!-- <div class="b2">
		<h5><i>Our team will verify your details and will reach you out soon via email!!!</i></h5>
	</div> -->
<center>
	<div class="b4">
	<h1>REGISTRATION</h1>
<h4>We recommend your to give as much as information so that the patient will reach you out</h4>
<!--<h5><a href="Term.php">Terms and conditions</a></h5>-->
</div>
<div class="b1">
<form method="post" style="margin-top:20px";><br>
<input type="text" name="name" placeholder=" Name" size="25" class="inpborder" required /> &nbsp
<input type="tel" id="phone" name="phone" size="25" placeholder=" Phone Number" class="inpborder" pattern="[0-9]{5} [0-9]{5}" required><br><br>

<input type="email" name="em" placeholder=" Email" size="25" class="inpborder" required /> &nbsp
<input type="text" name="deg" placeholder=" Degree" class="inpborder" size="25" /> <br><br>

<input type="text" name="yoe" placeholder=" Years of Expereince" size="25" class="inpborder" required /> &nbsp 
<input type="text" name="spec" placeholder=" Specialization" size="25" class="inpborder" required /> <br><br>



<input type="text" name="disease" placeholder=" Disease" size="25" class="inpborder">&nbsp
<input type="text" name="charge" placeholder=" Charges" size="25" class="inpborder"><br><br>

<textarea placeholder=" Address" rows="3" cols="40" style="margin-left: 30px;" class="addre"></textarea>
<input type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-top: -100px; margin-left: 50px;">
</form>
</div>
</center>
</body>
</html>
