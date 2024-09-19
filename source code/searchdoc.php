<?php 
$con=mysqli_connect("localhost","root","","healthcare");

if(isset($_POST['input'])){
	$input = $_POST['input'];

	$sql = "select * from doctor where name like '{$input}%'";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0 ){
	while($row = mysqli_fetch_row($result))
    {
    	?><br>
  <div style="margin-left:140px; width: 1000px; background-color: rgba(0, 128, 128, .3);" class=" box rounded "> 
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
    }
else{
	echo "<h1>Not Details Matched</h1>";
}
}
?>