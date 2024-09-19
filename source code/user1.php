<!DOCTYPE html>
<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "healthcare");
$name = $_SESSION['fname'];
$patid = $_SESSION['patient_id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newstyle.css">
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xxxxxxx" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        nav {
            background: rgba(0, 128, 128, 0.8);
        }
        .panel-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .panel-body img {
            width: 80px; /* Adjust as per your preference */
            height: 80px; /* Adjust as per your preference */
            margin-bottom: 10px; /* Optional: Adjust spacing */
        }
        .StepTitle {
            margin-top: 5%;
        }
    </style>
    <script>
        function clickDiv(id) {
            document.querySelector(id).click();
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">We 3 Care</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $name?></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top:36px;margin-left: -0.99%;">
        <div class="row">
            <div class="col-md-4" style="max-width:25%;margin-top: -2%; position: fixed;">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-dash-list" data-bs-toggle="list" href="#list-dash" role="tab" aria-controls="dash">Dashboard</a>
                    <a class="list-group-item list-group-item-action" id="list-home1-list" href="predict_disease1.php" role="tab">Predict Disease</a>
                    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
                    <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab" data-bs-toggle="list" aria-controls="pat">
                        <i class="fas fa-calendar"></i> View Appointment History
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-pre" id="list-pres-link" role="tab" data-bs-toggle="list" aria-controls="pre">Prescriptions</a>
                    <a class="list-group-item list-group-item-action" href="#list-query" id="list-q-list" role="tab" data-bs-toggle="list" aria-controls="query">Raise a Query</a>
                </div><br>
            </div>

            <div class="col-md-8 offset-md-4">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                        <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <img src="bookap.png" alt="Book Appointment" class="img-fluid">
                                            <h4 class="StepTitle">Book My Appointment</h4>
                                            <p class="links cl-effect-1">
                                                <a href="#list-home" onclick="clickDiv('#list-home-list')">Book Appointment</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <img src="predimg.jpeg" alt="Predict Disease" class="img-fluid">
                                            <h4 class="StepTitle">Predict Disease</h4>
                                            <p class="cl-effect-1">
                                                <a href="#list-home1-list" onclick="clickDiv('#list-home1-list')">Disease Prediction</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                        <img src="33777.png" alt="Prescriptions" class="img-fluid">
                                            <h4 class="StepTitle">View Appointment History</h4>
                                            <p class="cl-effect-1">
                                                <a href="#list-pat-list" onclick="clickDiv('#list-pat-list')">View Appointment History</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-sm-6">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <img src="pres.jpg" alt="Prescriptions" class="img-fluid">
                                            <h4 class="StepTitle">Prescriptions</h4>
                                            <p class="cl-effect-1">
                                                <a href="#list-pre" onclick="clickDiv('#list-pres-link')">View Prescription List</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <img src="query.jpg" alt="Raise a Query" class="img-fluid">
                                            <h4 class="StepTitle">Raise a Query</h4>
                                            <p class="links cl-effect-1">
                                                <a href="#list-q-list" onclick="clickDiv('#list-q-list')">Send Messages/Contact</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#search1").keyup(function(){
                                    var input = $(this).val();
                                    if(input != ""){
                                        $.ajax({
                                            url:"searchdoc.php",
                                            method:"POST",
                                            data:{input:input},
                                            success:function(data){
                                                $("#list-home").html(data);
                                            }
                                        });
                                    } else {
                                        $("#list-home").css("display","none");
                                    }
                                });
                            });
                        </script>
                        <?php 
                        $sql = "SELECT * FROM doctor";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_row($result)) {
                            ?>
                            <div class="container">
                                <div class="row box1">
                                    <div class="col">
                                        <div class="name">Dr.<?php echo $row[1]?></div>
                                    </div>
                                    <div class="col">
                                        <br>Charges:<?php echo $row[8]?><br><br>
                                        Address:<?php echo $row[9]?><br><br>
                                        Specialization:<?php echo $row[7]?>
                                    </div>
                                    <div class="col">
                                    <a class="btn btn-primary b1" href="bookappointment.php?id=<?php echo $row[0];?>">Book Appointment</a><br><br>
                                    <!-- <button type="button" class="btn btn-primary b1">Book Appointment</button><br><br> -->
                                    <a class="btn btn-primary b1" href="viewreview.php?id=<?php echo $row[0];?>">View Review</a><br><br>
                                    </div>
                                </div>
                                </div>
                        <?php
                        }
                        ?><br>
                    </div>
                    
                    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">
                        <div class="container-fluid">
                            <h2>Appointment History</h2>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Fees</th>
                                        <th scope="col">Appointment ID</th>
                                        <th scope="col">Prescribed?</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM bookappointment WHERE patient_ids = $patid";
                                    $result = mysqli_query($con, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>{$row['doctor_name']}</td>";
                                        echo "<td>{$row['time']}</td>";
                                        echo "<td>{$row['date']}</td>";
                                        echo "<td>{$row['address']}</td>";
                                        echo "<td>{$row['fees']}</td>";
                                        echo "<td>{$row['appointment_id']}</td>";
                                        echo "<td>{$row['isprescribed']}</td>";
                                        echo "<td>";
                                        if ($row['isprescribed'] == 'Yes') {
                                            $sql1="select * from review where app_id=".$row['appointment_id'];
                                            $result1=mysqli_query($con,$sql1);
                                            if($result1){
                                                $num_rows = mysqli_num_rows($result1);
                                                if($num_rows==0){
                                                    echo "<a class='btn btn-primary' href='review.php?id=" . $row['appointment_id'] . "'>Review</a>";
                                                }
                                                else{
                                                    echo "Review Given Thanks";
                                                }
                                            } 
                                        } else {
                                            echo "Review can be given after the prescription";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-pre" role="tabpanel" aria-labelledby="list-pres-link">
    <div class="container-fluid" style="margin-left:-40px;">
        <h6>PRESCRIPTION HISTORY</h6>
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Symptoms and Disease</th>
                            <th scope="col">Prescribe</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Prescription Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM prescribe";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['Note']}</td>"; // Assuming 'Note' is the column name
                            echo "<td>{$row['prescribe']}</td>"; // Assuming 'prescribe' is the column name
                            echo "<td>{$row['doctor_name']}</td>"; // Assuming 'doctor_name' is the column name
                            echo "<td>{$row['pres_date']}</td>"; // Assuming 'pres_date' is the column name
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

                    <div class="tab-pane fade" id="list-query" role="tabpanel" aria-labelledby="list-q-list">
                        <h4>Raise a Query</h4>
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
    <?php include("index.php"); ?>
</body>
</html>
