<!DOCTYPE html>
<html>
<head>
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
<style type="text/css">
  .b2{
      margin-top: 2%;
      width: 60%;
      padding-top: 20px;
      padding-left: 20px;
      padding-bottom: 30px;
      background-color: rgba(0, 128, 128, .8);
    }
    .f1{
      font-size: 200%;
      font-weight: bold;
      color: white;
      padding-left: 20px;
      font-family: "Times New Roman",Times,sans-serif;
    }
    .f2{
      color: whitesmoke;
      padding-top: 3px;
      padding-left: 20px;
      font-size: 100%;
      font-family: "Times New Roman",Times,sans-serif;
    }
    .btn-outline-light{
     margin-top: 2%;
     margin-left: 45%;
        color: white;
        background-color: rgba(0, 128, 128, .8);
        border-color:rgba(0, 128, 128, .9);
}
    .btn-outline-light:hover {
        color: rgba(0, 128, 128, .8);
        background-color: white;
        border-color: rgba(0, 128, 128, .9);
}

</style>
</head>
<body>
<div class="card w-70 mx-auto b2">
  <font class="f1">Predicted Disease :<?php session_start(); $disease=$_SESSION['dis']; echo $disease;   ?> </font>
  <font class="f2">Based on your Symptoms</font>
</div>
<div>
 <a href="user.php" class="btn btn-outline-light">Back to Home Page</a> 
</div>




</body>
</html>