<html>
<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:20px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-success" href="#" ><b>Home </b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="#"><b>List Of Doctors</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="#"><b>List Of Patients</b></a>
      </li>
    </ul>
    
  </div>
</nav>
<br>
<form method="post">
<table border="1" cellpadding="20">
  <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Degree</th>
    <th>Years of Experience</th>
    <th>Specialization</th>
    <th>Diseases</th>
    <th>Charges</th>
    <th>Address</th>
    <th>Degree</th>
    <th>Approve?</th>
  </tr>
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
      $url = 'E:/xamp/htdocs'."/".$row[8];
      //echo $url."<br>";
      $filename = basename($url);
      echo "<td>"?><a class="btn btn-primary" href="download.php?file=<?php echo $row[8];?>">Download</a><?php echo "</td>";?>
      <td><a class="btn btn-primary" href="confirmdoc.php?id=<?php echo $row[10];?>">Approve</a><?php echo "</td>";?>
      <?php
      echo "</tr>";
    }
  ?>
  </table>
</form>
</body>
</html>