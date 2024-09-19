<?php
session_start();
$name=$_SESSION['fname'];
$con=mysqli_connect("localhost","root","","healthcare");
$sql = "select * from doctor where doctor_id='".$_GET['id']."'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
$patient_id=$_SESSION['patient_id'];
$doctor_id=$row[0];

$sql1="select * from patient where patient_id=$patient_id"; 
$result1 = mysqli_query($con,$sql1);
$row1=mysqli_fetch_row($result1);
if(isset($_POST['submit']))
{
  
  $fh=fopen("appid.txt", 'r') or die("can't open file");
  $val = fread($fh,1);
  fclose($fh);
  $id = (int)$val;
  $app_id = $id;
  $id++;
  $p_id = $patient_id;
  $firstname = $row1[1];
  $lastname = $row1[2];
  $email = $row1[3];
  $gender = $row1[6];
  $contact = $row1[4];
  $doctorname = $row[3]; 
  $doc_id = $doctor_id;
  $time = $_POST['time'];
  $date1 = $_POST['date'];
  $address = $row[10];
  $fees = $row[9];
  $ispres="No";

  $sql="insert into bookappointment(patient_ids,firstname,lastname,email,gender,phone_num,doctor_name,doctor_ids,time,date,address,fees,appointment_id,isprescribed) values('$p_id','$firstname','$lastname','$email','$gender','$contact','$doctorname','$doc_id','$time','$date1','$address','$fees','$app_id','$ispres')";

  if(!(mysqli_query($con,$sql)))
  {
    echo "error".mysqli_error($con);
  }
  $fh=fopen("appid.txt", 'w') or die("can't open file");
  fwrite($fh, $id);
  echo '<script type="text/javascript">';
       echo 'window.location.href = "user1.php";';
       echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <style>
    body {
      font-family: 'IBM Plex Sans', sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }
    .b1{
      border:5px solid rgba(0, 128, 128, 0.8);
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .navbar {
      background: rgba(0, 128, 128, 0.8);
      height: 8%;
    }

    .navbar-brand {
      font-weight: bold;
      color: white !important;
    }

    .nav-link {
      color: white !important;
      font-weight: bold;
    }

    .container {
      margin-top: 30px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 30px;
    }

    .list-group-item {
      border: none;
      padding: 20px 30px;
      font-size: 1.1em;
    }

    h1 {
      margin-top: 20px;
      color: #007bff;
      font-weight: bold;
    }

    label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: rgba(0, 128, 128, 0.8);
      border: none;
      padding: 10px 20px;
      font-size: 1.1em;
    }

    .btn-primary:hover {
      background-color: rgba(0, 128, 128, 1);
    }

    .form-control, .form-select {
      border-radius: 5px;
      height: 45px;
      font-size: 1em;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">We 3 Care</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $name; ?></a>
        </li>
      </ul>
    </div>
  </nav>

  <center><h1>Welcome <?php echo $row1[1] . " " . $row1[2]; ?></h1></center>

  <div class="container b1">
    <div class="card w-75 mx-auto">
      <div class="card-body mx-auto p-3 w-100 h-50">
        <ul class="list-group">
          <li class="list-group-item"><b>Name: <span style="margin-left: 200px">Dr. <?php echo $row[3] . " " . $row[6]; ?></span></b></li>
          <li class="list-group-item"><b>Address:<span style="margin-left: 183px"> <?php echo $row[10]; ?></span></b></li>
          <li class="list-group-item"><b>Specialization:<span style="margin-left: 144px"> <?php echo $row[8]; ?></span></b></li>
          <li class="list-group-item"><b>Years of Experience:<span style="margin-left: 105px"> <?php echo $row[7]; ?></span></b></li>
          <li class="list-group-item"><b>Charges:<span style="margin-left: 182px"> <?php echo $row[9]; ?></span></b></li>
          <li class="list-group-item">
            <form method="post">
              <label for="date">Date:</label>
              <span style="margin-left: 208px"><input type="date" id="date" name="date" class="form-control" required></span>
          </li>
          <li class="list-group-item">
            <label for="time">Choose a Time:</label>
            <span style="margin-left: 140px">
              <select name="time" id="time" class="form-select" required>
                <option value="10.00 AM">10.00 AM</option>
                <option value="11.00 AM">11.00 AM</option>
                <option value="12.00 PM">12.00 PM</option>
                <option value="1.00 PM">1.00 PM</option>
              </select>
            </span>
          </li>
          <li class="list-group-item">
            <input type="submit" name="submit" class="btn btn-primary" style="margin-left: 250px" value="Book" onclick="alert('Successfully Booked');">
          </li>
            </form>
        </ul>
      </div>
    </div>
  </div>
  <?php include("index.php"); ?>
</body>
</html>
