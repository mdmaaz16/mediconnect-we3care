<?php 
session_start();
$name = $_SESSION['dname'];
$did = $_SESSION['doctor_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>We 3 Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxx" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> We 3 Care </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="font-weight: bolder; display: block;"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $name; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="font-weight: bolder; display: block;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="margin-top: 70px;">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-dash-list" data-bs-toggle="list" href="#list-dash" role="tab" aria-controls="list-dash" style="text-align: center;">Dashboard</a>
        <a class="list-group-item list-group-item-action" id="list-app-list" data-bs-toggle="list" href="#list-app" role="tab" aria-controls="list-app">Appointments</a>
        <a class="list-group-item list-group-item-action" id="list-pres-list" data-bs-toggle="list" href="#list-pres" role="tab" aria-controls="list-pres">Prescription List</a>
        <a class="list-group-item list-group-item-action" id="list-q-list" data-bs-toggle="list" href="#list-query" role="tab" aria-controls="list-query">Raise a Query</a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
          <div class="container-fluid bg-white">
            <div class="row">
              <div class="col-sm-4 text-center">
                <div class="panel panel-white no-radius">
                  <div class="panel-body">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="StepTitle" style="margin-top: 5%;"> View Appointments</h4>
                    <script>
                      function clickDiv(id) {
                        document.querySelector(id).click();
                      }
                    </script>
                    <p class="links cl-effect-1">
                      <a href="#list-app" onclick="clickDiv('#list-app-list')">Appointment List</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 text-center">
                <div class="panel panel-white no-radius">
                  <div class="panel-body">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="StepTitle" style="margin-top: 5%;"> Prescriptions</h4>
                    <p class="links cl-effect-1">
                      <a href="#list-pres" onclick="clickDiv('#list-pres-list')">Prescription List</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 text-center">
                <div class="panel panel-white no-radius">
                  <div class="panel-body">
                    <span class="fa-stack fa-2x">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="StepTitle" style="margin-top: 5%;"> Raise a Query</h4>
                    <p class="links cl-effect-1">
                      <a href="#list-query" onclick="clickDiv('#list-q-list')">Send Messages/Contact</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-app-list">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Id</th>
                    <th scope="col">Medical History</th>
                    <th scope="col">Prescribe</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","healthcare");
                    // global $con;
                    $did = $_SESSION['doctor_id'];
                    $query = "select patient_ids,firstname,lastname,gender,phone_num,time,date,appointment_id from bookappointment where doctor_ids='$did' and isprescribed='No'";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      ?>
                      <tr>
                      <td><?php echo $row['patient_ids'];?></td>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['phone_num'];?></td>
                        <td><?php echo $row['time'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['appointment_id'];?></td>
                        <td><a class="btn btn-primary" href="medicalhistory.php?id=<?php echo $row[0];?>">Patient's Medical History</a></td>
                        <td>
                        <?php 
                         ?>
                       <a class="btn btn-primary" href="prescribe.php?id=<?php echo $row['appointment_id'];?>">PRESCRIBE</a>
                        <?php  ?>
                        </td>
                      </tr></a>
                    <?php } ?>
                </tbody>
              </table>
        <br>
        </div>
        <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">Prescriptions content goes here...
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Symptoms</th>
                    <th scope="col">Precribed Medicine</th>

                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $con = mysqli_connect("localhost", "root", "", "healthcare");
                    
                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT patient_ids, firstname, lastname, appointment_id, time FROM bookappointment WHERE doctor_ids='$did'";
                    $sql1 = "SELECT prescribe, Note FROM prescribe WHERE doctor_id='$did'";

                    $res1 = mysqli_query($con, $sql);
                    $res2 = mysqli_query($con, $sql1);

                    if ($res1 && $res2) {
                        while (($row1 = mysqli_fetch_array($res1)) && ($row2 = mysqli_fetch_array($res2))) {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row1['patient_ids']); ?></td>
                            <td><?php echo htmlspecialchars($row1['firstname']); ?></td>
                            <td><?php echo htmlspecialchars($row1['lastname']); ?></td>
                            <td><?php echo htmlspecialchars($row1['appointment_id']); ?></td>
                            <td><?php echo htmlspecialchars($row1['time']); ?></td>
                            <td><?php echo htmlspecialchars($row2['Note']); ?></td>
                            <td><?php echo htmlspecialchars($row2['prescribe']); ?></td>
                        </tr>
                        <?php
                        }
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }

                    mysqli_close($con);
                    ?>
                    </tbody>
                    </table>
        </div>
        <div class="tab-pane fade" id="list-query" role="tabpanel" aria-labelledby="list-q-list">Queries content goes here...

        <div class="container mt-3" style="margin-left:-160px;">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card bg-dark text-white">
                          <div class="card-header">
                              Contact Us
                          </div>
                          <div class="card-body">
                              <form id="contactForm">
                                  <div class="form-group">
                                      <label for="email">Email address</label>
                                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="message">Message</label>
                                      <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..." required></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
