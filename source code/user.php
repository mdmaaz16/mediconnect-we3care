<!DOCTYPE html>
<?php 
session_start();
$con=mysqli_connect("localhost","root","","healthcare");
//echo $row1[0];
$name=$_SESSION['fname'];
$patid=$_SESSION['patient_id'];
if(isset($_POST['submit']))
{
  $con=mysqli_connect("localhost","root","","healthcare");
  $a1=$_POST['email1'];
  $a2=$_POST['text1'];

  $sql="insert into doc_qr(Email,Message) values ('$a1','$a2')";
  if(!(mysqli_query($con,$sql)))
  {
    echo "error".mysqli_error($con);
  }
}
?>
<html lang="en">
  <head>

<style type="text/css">
  .box{
    border: 2px solid black;
    box-shadow: 3px 1px;
    font-family: "Times New Roman", Times, serif;
  }
</style>
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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <nav class="navbar navbar-expand-lg navbar-dark bg fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> We 3 Care </a>
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
img{
  width: 100px;
  height: 100px;
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
.f1{
  font-weight: bold;
  margin-left: 30%;
  font-size: 115%;
}
.a1{
  border-radius: 5px;
  border: 1.5px solid black;
  height: 8%;
  width: 45%;
}
.a2{
  border-radius: 5px;
  border: 1.5px solid black;
  width: 45%;
  height: 50%;
}
.b1{
  margin-left: 33%;
  margin-top: 1%;
}
  </style>
<div class="col-md-3" style="margin-left:500px">
          <form class="form-group">
            <div class="row">
              <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Doctor Name" id="search1" class = "form-control"></div>
              <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
            </form>
          </div>
  <div class="collapse navbar-collapse nav" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php" style="margin-left: 590%;font-weight: bolder;font-display: block;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#" style="margin-left:200px"><?php echo $name; ?></a>
      </li>
    </ul>
  </div>
</nav><br>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:36px;margin-left: -0.99%;">
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: -2%; position: fixed;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" id="list-home1-list"  href="predict_disease1.php" role="tab">Predict Disease</a>
      <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
      <a class="list-group-item list-group-item-action" href="#list-pre" id="list-pres-link" role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>
      <a class="list-group-item list-group-item-action" href="#list-query" id="list-q-list" role="tab" data-toggle="list" aria-controls="home">Raise a Query</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 2%;margin-left: 18.2%;position: sticky;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4" style="left: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"><img src="bookap.png"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                      
                      <p class="links cl-effect-1">
                        <a href="#list-home" onclick="clickDiv('#list-home-list')">
                          Book Appointment
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 8%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"><img src="predimg.jpeg"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Predict Disease</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-home1-list')">
                          Disease Prediction
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 8%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"><img src="33777.png"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Appointment History
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top:5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"><img src="pres.jpg"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Prescriptions</h2>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescription List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list fa-stack-1x fa-inverse"><img src="query.jpg"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;"> Raise a Query</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                      
                      <p class="links cl-effect-1">
                        <a href="#list-app" onclick="clickDiv('#list-q-list')">
                          Send Messages/Contact
                        </a>
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
                //alert(input);


                if(input != ""){
                  $.ajax({

                    url:"searchdoc.php",
                    method:"POST",
                    data:{input:input},

                    success:function(data){
                      $("#list-home").html(data);
                    }
                  });
                }
                else{
                  $("list-home").css("display","none");
                }
              });
            });
          </script>
  
              <?php 
        //$con=mysqli_connect("localhost","root","","healthcare");
        $sql = "select * from doctor";
        $result = mysqli_query($con,$sql);
        $i=0;
        //start:
        while($row = mysqli_fetch_row($result))
        {
    ?><br>

  <div style="margin-left:140px; width: 1000px; background-color: lightgrey;" class=" box rounded "> 
  <div class="container p-1 m-2 ">
  <div class="container overflow-hidden">
  <div class="row bg-grey">
    <div class="col-4 ">
     <div class="p-4 "><?php echo "<b>Dr.$row[3], $row[6]</b>    ";?></div>
    </div>
    <div class="col-5">
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
        <br>
      </div>



      






    

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

       <div class="col-md-15">
      <form class="form-group" action="patientsearch.php" method="post">
        <div class="row">
          <div style="margin-left:30px"><b>APPOINTMENT HISTORY</b></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Doctor Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Address</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Prescriped?</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // $con=mysqli_connect("localhost","root","","myhmsdb");
                    // //global $con;
                    $query = "select * from bookappointment where patient_ids=$patid";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row[6];
                      $fname = $row[8];
                      $lname = $row[9];
                      $gender = $row[10];
                      $email = $row[11];
                      $app_id=$row[12];
                      
                      echo "<tr>";
                      echo "<td>$pid</td>";
                      echo "<td>$fname</td>";
                      echo "<td>$lname</td>";
                      echo "<td>$gender</td>";
                      echo "<td>$email</td>";
                      echo "<td>$app_id</td>";
                      echo "<td>$row[13]</td>";
                      if(row[13]=='Yes')
                        echo "<td><button>Review</button></td>";
                      else
                        echo "<td>Review can be given after the prescription</td>";
                      echo "</tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div>
</div>




<div class="tab-pane fade" id="list-pre" role="tabpanel" aria-labelledby="list-pres-link">
    <div style="margin-left: 20px;"><b>PRESCRIPTIONS HISTORY</b></div><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Symptoms and Disease</th>
                <th scope="col">Prescription</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Prescription Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql1 = "SELECT * FROM prescribe WHERE patient_id = $patid";
            $result1 = mysqli_query($con, $sql1);

            while ($row1 = mysqli_fetch_array($result1)) {
                ?>
                <tr>
                    <td><?php echo $row1[4]; ?></td>
                    <td><?php echo $row1[3]; ?></td>
                    <td><?php echo $row1[5]; ?></td>
                    <td><?php echo $row1[6]; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>              
                  <?php 

                    $con=mysqli_connect("localhost","root","","myhmsdb");
                    global $con;

                    $query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    

                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td><?php echo $row['disease'];?></td>
                        <td><?php echo $row['allergy'];?></td>
                        <td><?php echo $row['prescription'];?></td>
                        <td>
                          <form method="get">
                          <!-- <a href="admin-panel.php?ID=" 
                              onClick=""
                              title="Pay Bill" tooltip-placement="top" tooltip="Remove"><button class="btn btn-success">Pay</button>
                              </a></td> -->

                              <a href="admin-panel.php?ID=<?php echo $row['ID']?>">
                              <input type ="hidden" name="ID" value="<?php echo $row['ID']?>"/>
                              <input type = "submit" onclick="alert('Bill Paid Successfully');" name ="generate_bill" class = "btn btn-success" value="Pay Bill"/>
                              </a>
                              </td>
                              </form>

                    
                      </tr>
                    <?php }
                    ?>
                </tbody>
              </table>
        <br>
      </div>


<div class="tab-pane fade" id="list-query" role="tabpanel" aria-labelledby="list-q-list">
        
              <table class="table table-hover">
                <tbody>
                  <form method="post">
                      <tr>
                        <td><font class="f1">Your Email</font></td>
                        <td><input class="a1" type="email" name="email1"></td> 
                      </tr>
                      <tr>
                        <td><font class="f1">Your Message</font></td>
                        <td><textarea class="a2" name="text1" rows="4" cols="35" value="Your Message"></textarea></td> 
                      </tr>
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" class="btn-primary btn b1"></td> 
                      </tr>
                  </form>
            
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
<?php include("index.php"); ?>