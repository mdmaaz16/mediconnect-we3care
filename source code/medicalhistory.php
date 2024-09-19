<?php
session_start();
$name = $_SESSION['dname'];
?>
<html>
<head>
	<style type="text/css">
		   .bg {
    background: rgba(0, 128, 128, .8);
}
.con{
	width: 1000px;
}

	</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> We 3 Care </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="margin-left: 900px;font-weight: bolder;font-display: block;"><i class="fa fa-sign-out" aria-hidden="true"></i><?php echo $name;?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="margin-left: 100px;font-weight: bolder;font-display: block;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
<br><br><br>
<div style="margin-left:600px"><h3>Patient's Medical History</h3></div>

  <?php
$con=mysqli_connect("localhost","root","","healthcare");
$sql="select * from prescribe where patient_id ='".$_GET['id']."'";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_row($result))
{
?>
<br>
<div class="container  border border-dark p-4 ">
  <div class="row">
    <div class="col-md-4">
     <b>Doctor Name: <?php echo $row[5];?></b>
    </div>
    <div class="col-md-2">
      <b>Prescription Date: <?php echo $row[6];?></b>
    </div>
    <div class="col-md-2">
      <b>Symtopms and Diseases: <?php echo $row[4];?></b>
    </div>
    <div class="col-md-4">
      <b>Prescriped Medicine: <?php echo $row[3];?></b>
    </div>
  </div>
</div>
<?php 	}  ?>
