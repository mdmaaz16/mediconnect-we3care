<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script><!-- 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<style type="text/css">
		.navbar
    {
        background: rgba(0, 128, 128, .8);
        height: 8%;
    }
		.b1{
			width: 100%;
			height: 100px;
			background-color: red;
		}
	</style>
</head>
<body>




<?php 
		    $con=mysqli_connect("localhost","root","","healthcare");
		    $sql = "select * from doctor";
		    $result = mysqli_query($con,$sql);
		    $i=0;
		    //start:
		    while($row = mysqli_fetch_row($result))
		    {
		?>
	<div style="margin-left:180px; width: 800px; background-color: rgba(0, 128, 128, .3);" class="rounded"> 
	<div class="container p-2">
  <div class="container overflow-hidden">
  <div class="row bg-grey">
    <div class="col-3 ">
     <div class="p-4 "><?php echo "<b>Dr.$row[3], $row[6]</b>    ";?></div>
    </div>
    <div class="col-3">
      <div class="p-3"><?php echo "<h5><b>Charges: Rs.$row[9] <br> Address: $row[10] <br> Specialization: $row[8]</b></h5> ";?></div>
    </div>
    <div class="col-2">
      <div class="p-2 "><br><a class="btn btn-primary" href="bookappointment.php?id=<?php echo $row[0];?>">Book</a></div>
    </div>
  </div>
</div>
  		
</div>
</div>
<?php
}
?>
</body>
</html>