<?php
include "db.php"; 
session_start();
$sql = "select * from review where doctor_id='".$_GET['id']."'";
$name = $_SESSION['fname'];
$result = mysqli_query($con,$sql);
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .b1 {
            border: 5px solid rgba(0, 128, 128, 0.8);
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        .navbar {
            background: rgba(0, 128, 128, 0.8); /* Original navbar color */
            height: 8%;
        }
        .navbar-lighter {
            background: rgba(0, 128, 128, 0.5); /* Lighter navbar color */
            border: 2px solid rgba(0, 128, 128, 0.8); /* Border color same as navbar */
            border-radius: 10px; /* Optional: Add border radius for a rounded look */
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .checked {
            color: orange; /* Customize star color */
        }
        .card-body-content {
            font-weight: bold; /* Make text inside card body bold */
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
    <?php 
    $k=0;
    ?>
    <div class="container mt-5">
        <?php 
        while($row=mysqli_fetch_row($result)){
            $k=1;
            ?>
            <div class="card">
                <div class="card-body navbar-lighter"> <!-- Apply lighter navbar color to card body -->
                    <div class="row">
                        <div class="col-md-6">
                            <b><?php 
                                echo $row[2] . "<br>";
                                echo "Rating: " . $row[3] . "/5";
                                echo "<span class='fa fa-star checked'></span><br>";
                                echo "Comments: " . $row[4] . "<br>";
                            ?> </b>
                        </div>
                        <div class="col-md-6">
                        <b><?php
                                echo "Time: ".$row[5] . "<br>";
                                echo "Date: ".$row[6] . "<br>";
                            ?></b>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <?php if($k==0){?>
        <div class="card">
            <div class="card-body navbar-lighter"> <!-- Apply lighter navbar color to card body -->
                <?php echo "No rows detected"; ?>
            </div>
        </div>
        <?php }?>
    </div>
</body>
</html>
