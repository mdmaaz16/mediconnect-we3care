<?php
$con=mysqli_connect("localhost","root","","healthcare");

session_start();
if(isset($_POST['submit']))
{

    $fh=fopen("patientid.txt", 'r') or die("can't open file");
    $val = fread($fh,1);
    fclose($fh);
    $id = (int)$val;
    $id++;

    $fname=$_POST['fn'];
    $lname=$_POST['ln'];
    $email=$_POST['em'];
    $phone=$_POST['pn'];
    $passowrd=$_POST['ps'];
    $gen=$_POST['ml'];
    $sql="insert into patient(patient_id,firstname,lastname,email,phone_num,password,gender) values('$id','$fname','$lname','$email','$phone','$passowrd','$gen')";

    if(!(mysqli_query($con,$sql)))
        echo "unable to enter".mysqli_error($con);
    $fh=fopen("patientid.txt", 'w') or die("can't open file");
    fwrite($fh, $id);
    $_SESSION["fname"]=$fname;
    $to = $email;
    $subject = "Thank you! Your Registration is successful";
    $txt = "Use your mail and password for login. If you hav any queries feel free to contact us. \n\n Mail:$email \n Paasword:$passowrd \n\n Thanks and Regrads\n\n We 3 Care";
    $headers = "From: maaz1820099@gmail.com" . "\r\n" ."CC: maazm2708@gmail.com";
    mail($to,$subject,$txt,$headers);
    
    echo '<script type="text/javascript">';
    echo 'window.location.href = "user.php";';
    echo '</script>';
}
?>
<!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Healthcare</title>
        <script type="text/javascript">
            var check = function() {
              if (document.getElementById('ps').value ==
                document.getElementById('cps').value) {
                document.getElementById('message').style.color = '#5dd05d';
            document.getElementById('message').innerHTML = 'Matched';
        } else {
            document.getElementById('message').style.color = '#f55252';
            document.getElementById('message').innerHTML = 'Not Matching';
        }
    }
    function checklen()
    {
        var pass1 = document.getElementById("ps");  
        if(pass1.value.length<6){  
            alert("Password must be at least 6 characters long. Try again!");  
            return false;  
        }  
    }

</script>
<style>
    body {
        background: -webkit-linear-gradient(left, #2930af, #40c8ff);
        background-size: cover;
    }


    .b1{
        margin-left: 400px;
    }
    #b1{
        width: 900px;
        height: 450px;
        background-color: powderblue;
        border-top-left-radius: 70px;
        border-bottom-left-radius: 70px;
        position: absolute;
        top: 100px;
        box-shadow: 10 grey;
    }
    #b2{
        width: 700px;
        height: 250px;
        margin-left: 100px;
        background-color: powderblue\;
        border-top-left-radius: 70px;
        border-bottom-left-radius: 70px;
        position: absolute;
        top: 70px;
    }
    .inpborder{
        border-radius: 5px;
    }
    #b3{
        margin-left: 100px;
    }
    ul li a:hover{
        color: red;
    }
    .w{
        width: 200px;
        height: 200px;
        position: relative;
        top: 200px;
        left: 50px;
    }
</style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid " >
        <a class="navbar-brand text-dark" href="#" style="font-size: 30px;" ><b><i>We 3 Care</i></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="margin-left:800px">
              <a class="nav-link active" aria-current="page" href="#" style="font-size: 20px;"><b>Home</b> &nbsp</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#" style="font-size: 20px;"><b>About</b></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="p_cont.php" style="font-size: 20px;"><b>Contact us</b></a>
          </li>

      </ul>
  </div>
</div>
</nav>
<div class="w">
    <h1>WELCOME</h1>
    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" style="margin-left: 30px;" />

</div>
<div class="container mt-3 b1" id="b1">

    <ul class="nav nav-tabs" style="margin-left:600px;">
        <li class="nav-item">
            <a class="nav-link active bg-light" data-bs-toggle="tab" href="#home">
            Patient</a>
        </li>
        <li class="nav-item">
            <a class="nav-link bg-light" data-bs-toggle="tab" href="#contact">
            Doctor</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home" style="margin-left: 100px;">
            <div class="row border g-0 rounded shadow-sm">
                <div class="col p-4">
                    <h4><center><i>REGISTER AS PATIENT</center></i></h4><br>
                    <form method="post">      
                        <input type="text" placeholder="First Name" name="fn" size="30" class="inpborder" required />
                        <input type="text" placeholder="Last Name" name="ln" size="30" id="b3" class="inpborder" required /><br><br>


                        <input type="text" placeholder="Your email" name="em" size="30" class="inpborder" required />
                        <input type="text" placeholder="Your phone number" name="pn" size="30" id="b3" class="inpborder" required /><br><br>


                        <input type="password" placeholder="Password" id="ps" name="ps" size="30" class="inpborder" onkeyup='check();' required/>
                        <input type="password" placeholder="Confirm password" id="cps" name="cps" size="30" style="margin-left: 100px;" class="inpborder" onkeyup='check();' required /><br><span id="message"></span><br><br>
                        <input type="radio" name="ml" value="male" required /> Male
                        <input type="radio" name="ml" value="male" required /> Female<br><br>
                        <input type="submit" class="btn btn-primary" name="submit" style="margin-left: 600px; margin-top: -90px;" onclick="checklen()" />
                    </form>
                    <a href="login.php">Already have an account?</a>

                </div>
            </div>
            
        </div>
        <?php
        if(isset($_POST['doc']))
        {
            $username=$_POST['username3'];
            $password=$_POST['password3'];
            $sql="select * from doctor where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_row($result)) {
      if($username==$row[1] && $password==$row[2])
      {
   
        //echo "matched successfully";
        $_SESSION['doctor_id']=$row[0];
        $_SESSION['dname']=$row[1];
        //echo $_SESSION['name1'];
        echo '<script type="text/javascript">';
        echo 'window.location.href = "doctor1.php";';
        echo '</script>';
        break;

      }
    }
        }
        ?>

        <div class="tab-pane" id="contact">
            <div class="row border g-0 rounded shadow-sm" id="b2">
                <div class="col p-2" style="margin-left: 100px;">
                   <i><h4>LOGIN AS DOCTOR</h4></i></h4>     <br>
                   <form method="post"> 
                     <input type="text" placeholder="User Name *" class="inpborder" name="username3" size="40" required /><br><br>
                     <input type="password"  placeholder="Password *" class="inpborder" name="password3" size="40" required /><br><br>

                     <input type="submit" class="btn btn-primary" name="doc" value="login" />
                 </form>
                 <center><div style="margin-top: -30px;"><a href="doc1_m.php">Register as doctor</a></div></center>
             </div>

         </div>
     </div>
 </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>