<?php
$con=mysqli_connect("localhost","root","","healthcare");
  $sql = "select * from dup_doc where doc_id='".$_GET['id']."'";
  $result=mysqli_query($con,$sql);
  $row = mysqli_fetch_row($result);
  $name=$row[0];
?>
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
<?php
if(isset($_POST['submit']))
{
  $a=$row[9];
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
  //echo $a;

  $sql="insert into doctor(doctor_id,username,password,name,phone_number,email,degree,years_of_exp,
  specialization,charges,address,file) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')"; 
  
  if(!(mysqli_query($con,$sql)))
  {
    echo "error".mysqli_error($con);
  }

  $sql1 ="delete from dup_doc where doc_id=$row[9]";
  if(!(mysqli_query($con,$sql1)))
  {
    echo "error".mysqli_error($con);
  }
   echo '<script type="text/javascript">';
        echo 'window.location.href = "dup_admin.php";';
        echo '</script>';
}
?>

<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		.b2{
			margin-top: 3%;
			width: 90%;
			padding-top: 50px;
			padding-left: 190px;
			padding-bottom: 40px;
			background-color: rgba(0, 128, 128, .4);
		}
		.br{
			border-radius: 20px;
		}
		.bt{
			background: rgba(0, 128, 128, .8);
		}
	</style>
</head>
<body>
	<div class="card w-70 mx-auto b2">
	<div class="container overflow-hidden">
  <div class="row gy-5">
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Name:</b> Dr.".$row[0];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Phone Number: </b>".$row[1];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Email: </b>".$row[2];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Degree: </b>".$row[3];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Years of experience: </b>".$row[4];?></div>
    </div>
         <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Specialization: </b>".$row[5];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Charges: </b>".$row[6];?></div>
    </div>
    <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Address: </b>".$row[7];?></div>
    </div>
    
     <div class="col-5">
      <div class="p-2 border bg-light br"><?php echo "<b>Doctor id: </b>".$row[9];?></div>
    </div>
     <div class="col-5 mx-auto">
      <div class="p-2 border mx-auto bg-light br"><?php echo "<b>File : </b>"?><a class="btn btn-primary" href="download.php?file=<?php echo $row[8];?>">Download</a></div>
    </div>
   
  </div>
</div>
</div>

<br>

<div class="card mx-auto" style="width: 20rem; ">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo "<b>Username:</b>".$name;?></li>
    <li class="list-group-item"><?php echo "<b>Password:</b> $myRandomString";?></li>
   
  </ul>
</div>
<br>
<div class="card w-25 mx-auto">
  <div class="card-body mx-auto">
  	<form method="post">
    <input type="submit" name="submit" class="btn btn-secondary bt" value="Approve">
    <button type="button" class="btn btn-secondary bt">Do not Approve</button>
</form>
  </div>
</div>

<br>

	</body>
	</html>