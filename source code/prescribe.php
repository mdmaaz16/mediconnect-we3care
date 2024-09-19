<?php
session_start();
$name = $_SESSION['dname'];
$con = mysqli_connect("localhost", "root", "", "healthcare");

$sql = "SELECT * FROM bookappointment WHERE appointment_id='" . $_GET['id'] . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($result);

if (isset($_POST['sub'])) {
  $patient_id = $row[0];
  $doctor_id = $row[7];
  $app_id = $row[12];
  $note = $_POST['Note'];
  $pres = $_POST['pres'];
  $dname = $row[6];
  $date = $row[9];
  $sql1 = "INSERT INTO prescribe(patient_id, doctor_id, app_id, prescribe, Note, doctor_name, pres_date) VALUES ('$patient_id', '$doctor_id', '$app_id', '$pres', '$note', '$dname', '$date')";
  if (!mysqli_query($con, $sql1)) {
    echo mysqli_error($con);
  }
  $sql = "UPDATE bookappointment SET isprescribed='Yes' WHERE appointment_id='" . $_GET['id'] . "'";
  mysqli_query($con, $sql);
  echo '<script type="text/JavaScript">alert("Patient Prescribed");</script>';
  echo '<script type="text/javascript">window.location.href = "doctor1.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

  <style>
    .list-group-item.active {
      z-index: 2;
      color: #fff;
      background-color: #342ac1;
      border-color: #007bff;
    }
    .text-primary {
      color: #342ac1 !important;
    }
    .btn-primary {
      background-color: #3c50c1;
      border-color: #3c50c1;
    }
    .navbar {
      background: rgba(0, 128, 128, .8);
      height: 8%;
    }
    button:hover {
      cursor: pointer;
    }
    #inputbtn:hover {
      cursor: pointer;
    }
    .card-custom {
      background: rgba(0, 128, 128, .8);
      color: #fff;
      width: 80%; /* Make the card width 100% to match the navbar */
      margin: auto; /* Center the card */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">We 3 Care</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="margin-left: 900px; font-weight: bolder;"><i class="fa fa-sign-out" aria-hidden="true"></i><?php echo $name; ?></a>
      </li>
    </ul>
  </nav>
  <div class="card border border-dark mt-2 card-custom">
    <div class="card-body">
      <div class="container-fluid" style="margin-top:50px;">
        <h3 style="text-align: center; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?php echo $row[6]; ?></h3>
        <form method="post">
          <div class="container">
            <table class="table table-borderless">
              <tr>
                <td width="100">
                  Symtomps and Disease:
                </td>
                <td>
                  <textarea id="allergy" cols="80" rows="3" name="Note" class="form-control" required></textarea>      
                </td>
              </tr>
              <tr>
                <td width="100">
                  Prescription:
                </td>
                <td>
                  <textarea id="allergy" cols="80" rows="3" name="pres" class="form-control" required></textarea>      
                </td>
              </tr>
            </table>
            <br>
            <input type="submit" name="sub" class="btn btn-primary" style="margin-left: 50%;">
          </div>
        </form>
      </div>  
    </div>
  </div>
</body>
</html>
