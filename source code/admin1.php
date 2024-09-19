<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We 3 Care | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxx" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            padding-top: 56px;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #f8f9fa;
        }
        .sidebar .list-group-item {
            text-align: center;
        }
        .content {
            margin-left: 250px;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> We 3 Care | Admin </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="font-weight: bolder;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="sidebar">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-dash-list" data-bs-toggle="list" href="#list-dash" role="tab" aria-controls="dash">Dashboard</a>
            <a class="list-group-item list-group-item-action" id="list-doc-list" data-bs-toggle="list" href="#list-doc" role="tab" aria-controls="doc">Doctor List</a>
            <a class="list-group-item list-group-item-action" id="list-pat-list" data-bs-toggle="list" href="#list-pat" role="tab" aria-controls="pat">Patient List</a>
            <a class="list-group-item list-group-item-action" id="list-app-list" data-bs-toggle="list" href="#list-app" role="tab" aria-controls="app">Appointment Details</a>
            <a class="list-group-item list-group-item-action" id="list-pres-list" data-bs-toggle="list" href="#list-pres" role="tab" aria-controls="pres">Prescription List</a>
            <a class="list-group-item list-group-item-action" id="list-mes-list" data-bs-toggle="list" href="#list-mes" role="tab" aria-controls="mes">Patient Queries</a>
            <a class="list-group-item list-group-item-action" id="list-mes1-list" data-bs-toggle="list" href="#list-mes1" role="tab" aria-controls="mes1">Doctor Queries</a>
            <a class="list-group-item list-group-item-action" id="list-doc-regt-list" data-bs-toggle="list" href="#doc-reg" role="tab" aria-controls="doc-reg">New Registration</a>
        </div>
    </div>
    <div class="content">
        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Doctor List</h4>
                                    <script>
                                        function clickDiv(id) {
                                            document.querySelector(id).click();
                                        }
                                    </script>
                                    <p class="links cl-effect-1">
                                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                                            View Doctors
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="left: -3%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                                    <p class="cl-effect-1">
                                        <a href="#list-pat" onclick="clickDiv('#list-pat-list')">
                                            View Patients
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                                    <p class="cl-effect-1">
                                        <a href="#list-app" onclick="clickDiv('#list-app-list')">
                                            View Appointments
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Prescription List</h4>
                                    <p class="cl-effect-1">
                                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                                            View Prescriptions
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                                    <p class="cl-effect-1">
                                        <a href="#app-hist" onclick="clickDiv('#list-doc-regt-list')">Add Doctors</a>
                                        <!-- &nbsp;|
                                        <a href="#app-hist" onclick="clickDiv('#list-mes1-list')">
                                            Delete Doctors
                                        </a> -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-doc-list">Doctor List Content
            <div class="col-md-8">
          <form class="form-group" action="doctorsearch.php" method="post">
            <div class="row">
              <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
              <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
            </form>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Doctor Name</th>
                <th scope="col">Specialization</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Fees</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $con=mysqli_connect("localhost","root","","healthcare");
              global $con;
              $query = "select * from doctor";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
                $username = $row[1];
                $spec = $row[8];
                $email = $row[5];
                $password = $row[2];
                $docFees = $row[9];

                echo "<tr>
                <td>$username</td>
                <td>$spec</td>
                <td>$email</td>
                <td>$password</td>
                <td>$docFees</td>
                </tr>";
              }
              ?>
            </tbody>
          </table>
          <br>
            </div>
            <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">Patient List Content

            <div class="col-md-8">
          <form class="form-group" action="patientsearch.php" method="post">
            <div class="row">
              <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class = "form-control"></div>
              <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div></div>
            </form>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Patient ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $con=mysqli_connect("localhost","root","","healthcare");
              global $con;
              $query = "select * from patient";
              $result = mysqli_query($con,$query);
              while ($row = mysqli_fetch_array($result)){
                $pid = $row['patient_id'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $gender = $row['gender'];
                $email = $row['email'];
                $contact = $row['phone_num'];
                $password = $row['password'];
                echo "<tr>
                <td>$pid</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$gender</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$password</td>
                </tr>";
              }

              ?>
            </tbody>
          </table>
          <br>
            </div>
            
            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-app-list">Appointment Details Content

            <div class="col-md-8">
        <form class="form-group" action="appsearch.php" method="post">
          <div class="row">
            <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
          </form>
        </div> 
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Appointment ID</th>
              <th scope="col">Patient ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Doctor Name</th>
              <th scope="col">Consultancy Fees</th>
              <th scope="col">Appointment Date</th>
              <th scope="col">Appointment Time</th>
              <th scope="col">Prescriped?</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $con=mysqli_connect("localhost","root","","healthcare");
            global $con;
            $query = "select * from bookappointment";
            $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){
              ?>
              <tr>
                <td><?php echo $row['appointment_id'];?></td>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
                <td><?php echo $row[4];?></td>
                <td><?php echo $row[3];?></td>
                <td><?php echo $row[5];?></td>
                <td><?php echo $row[6];?></td>
                <td><?php echo $row['fees'];?></td>
                <td><?php echo $row[9];?></td>
                <td><?php echo $row[8];?></td>
                <td><?php echo $row[13];?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <br>
            </div>
            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">Prescription List Content
            <div class="col-md-8">
          <div class="row">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Doctor</th>
                  <th scope="col">Patient ID</th>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Disease</th>
                  <th scope="col">Prescription</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $con=mysqli_connect("localhost","root","","healthcare");
                global $con;

                $query = "select * from prescribe";
                $result = mysqli_query($con,$query);
                while ($row = mysqli_fetch_array($result)){
                  $doctor = $row[5];
                  $pid = $row[0];
                  $ID = $row[2];
                  $appdate = $row[6];
                  $disease = $row[4];
                  $pres = $row[3];
                  echo "<tr>
                  <td>$doctor</td>
                  <td>$pid</td>
                  <td>$ID</td>
                  <td>$appdate</td>
                  <td>$disease</td>
                  <td>$pres</td>
                  </tr>";
                }
                ?>
              </tbody>
            </table>
            <br>
          </div>
        </div>
            </div>
            <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">Patient Queries Content</div>
            <div class="tab-pane fade" id="list-mes1" role="tabpanel" aria-labelledby="list-mes1-list">Doctor Queries Content</div>
            <div class="tab-pane fade" id="doc-reg" role="tabpanel" aria-labelledby="list-doc-regt-list">New Registration Content
            <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Phone_Number</th>
              <th scope="col">E-mail</th>
              <th scope="col">Degree</th>
              <th scope="col">Years_of_Experience</th>
              <th scope="col">Specialization</th>
              <th scope="col">Disease</th>
              <th scope="col">Charges</th>
              <th scope="col">Address</th>
              <th scope="col">Degree</th>
              <th scope="col">Approve?</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $con=mysqli_connect("localhost","root","","healthcare");
            $sql = "select * from dup_doc";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_row($result))
            {
              echo "<tr>";
              echo "<td>$row[0]</td>";
              echo "<td>$row[1]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
              echo "<td>$row[5]</td>";
              echo "<td>$row[9]</td>";
              echo "<td>$row[6]</td>";
              echo "<td>$row[7]</td>";
              $url = 'C:/xampp/htdocs'."/".$row[8];
      //echo $url."<br>";
              $filename = basename($url);
              echo "<td>"?><a class="btn btn-primary" href="download.php?file=<?php echo $row[8];?>">Download</a><?php echo "</td>";?>
              <td><a class="btn btn-primary" href="confirmdoc.php?id=<?php echo $row[9];?>">Approve</a><?php echo "</td>";?>
              <?php
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <br>

            </div>

        </div>
    </div>
</body>
</html>
