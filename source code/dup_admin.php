<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","healthcare");

//include('newfunc.php');
?>
<html lang="en">
<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-dark bg fixed-top">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> We 3 Care  | Admin </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <script >
      var check = function() {
        if (document.getElementById('dpassword').value ==
          document.getElementById('cdpassword').value) {
          document.getElementById('message').style.color = '#5dd05d';
        document.getElementById('message').innerHTML = 'Matched';
      } else {
        document.getElementById('message').style.color = '#f55252';
        document.getElementById('message').innerHTML = 'Not Matching';
      }
    }

    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    };
  </script>

  <style >
  .bg {
    background: rgba(0, 128, 128, .8);
  }

  .col-md-4{
    max-width:20% !important;
  }

  .list-group-item.active {
    z-index: 1;
    color: #fff;
    background-color: rgba(0, 128, 128, .8);
    border-color:rgba(0, 128, 128, .4);
  }
  .text-primary {
    color: #342ac1!important;
  }

  #cpass {
    display: -webkit-box;
  }

  #list-app{
    font-size:15px;
  }

  .btn-primary{
    background-color: rgba(0, 128, 128, .8);
    border-color:rgba(0, 128, 128, .2);
  }

</style>

<div class="collapse navbar-collapse nav" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item">
    <a class="nav-link" href="logout.php" style="margin-left: 1800%;font-weight: bolder;font-display: block;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"></a>
  </li>
</ul>
</div>
</nav>
</head>
<style type="text/css">
button:hover{cursor:pointer;}
#inputbtn:hover{cursor:pointer;}
</style>
<body style="padding-top:50px;">
 <div class="container-fluid" style="margin-top:36px;margin-left: -0.99%;">
  <div class="row">
    <div class="col-md-4" style="max-width:5%;margin-top: -2%; position: fixed;">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home" style="text-align: center;">Dashboard</a>
        <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">Doctor List</a>
        <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Patient List</a>
        <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
        <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
        <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Patient Queries</a>
        <a class="list-group-item list-group-item-action" href="#list-mes1" id="list-mes-list1"  role="tab" data-toggle="list" aria-controls="home">Doctor Queries</a>
        <a class="list-group-item list-group-item-action" href="#doc-reg" id="list-doc-regt"  role="tab" data-toggle="list" aria-controls="home">New Registration</a>

      </div><br>
    </div>
    <div class="col-md-8" style="margin-top: 2%;margin-left: 18.2%;position: fixed;">
      <div class="tab-content" id="nav-tabContent" style="width: 950px;">



        <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
          <div class="container-fluid container-fullw bg-white" >
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
                <div class="panel-body" >
                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                  <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>

                  <p class="cl-effect-1">
                    <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                      View Patients
                    </a>
                  </p>
                </div>
              </div>
            </div>


            <div class="col-sm-4">
              <div class="panel panel-white no-radius text-center">
                <div class="panel-body" >
                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                  <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>

                  <p class="cl-effect-1">
                    <a href="#app-hist" onclick="clickDiv('#list-app-list')">
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
                <div class="panel-body" >
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
                <div class="panel-body" >
                  <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                  <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                  <p class="cl-effect-1">
                    <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                    &nbsp|
                    <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                      Delete Doctors
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
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
        <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">
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
        <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
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
      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">
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
                <td><?php echo $row['app_id'];?></td>
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
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
      <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">
       <div class="col-md-8">
        <form class="form-group" action="messearch.php" method="post">
          <div class="row">
            <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
          </form>
        </div>
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $con=mysqli_connect("localhost","root","","healthcare");
            global $con;

            $query = "select * from pat_qr;";
            $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){

                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
              ?>
              <tr>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Message'];?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <br>
      </div>

      <div class="tab-pane fade" id="list-mes1" role="tabpanel" aria-labelledby="list-mes-list">
       <div class="col-md-8">
        <form class="form-group" action="messearch.php" method="post">
          <div class="row">
            <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
            <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
          </form>
        </div> 
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $con=mysqli_connect("localhost","root","","healthcare");
            global $con;

            $query = "select * from doc_qr;";
            $result = mysqli_query($con,$query);
            while ($row = mysqli_fetch_array($result)){

                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
              ?>
              <tr>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Message'];?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <br>
      </div>
      <div class="tab-pane fade" id="doc-reg" role="tabpanel" aria-labelledby="list-pat-list">
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
              <td><a class="btn btn-primary" href="confirmdoc.php?id=<?php echo $row[10];?>">Approve</a><?php echo "</td>";?>
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
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
</body>
</html>