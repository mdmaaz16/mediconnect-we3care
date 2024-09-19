<?php 
if (isset($_POST['submit'])) {
  $con=mysqli_connect("localhost","root","","healthcare");
  $fh=fopen("doctorid.txt", 'r') or die("can't open file");
  $val = fgets($fh);
  fclose($fh);
  $id = (int)$val;
  $id++;
  $a = $_POST['name'];
  $b = $_POST['phone'];
  $c = $_POST['em'];
  $d = $_POST['deg'];
  $e = $_POST['yoe'];
  $f = $_POST['spec'];
  
  $h = $_POST['charge'];
  $i = $_POST['address'];
  $j = $_FILES["file"]["name"];
  $k = $id;
  
  $storage="E:/xamp/htdocs/Project/".$j;
   //echo $storage;
  move_uploaded_file($_FILES['file']['tmp_name'],$storage);
  
  $sql = "insert into dup_doc(name,phone_number,email,degree,years_of_exp,specialization,charges,address,File,doc_id) values ('$a','$b','$c','$d','$e','$f','$h','$i','$j','$k')";

  if(!(mysqli_query($con,$sql)))
  {
    echo "error".mysqli_error($con);

  }
  $fh=fopen("doctorid.txt", 'w') or die("can't open file");
  fwrite($fh, $id);

}
?>
<html>
<head>
	<style>
 body {
    background-size: cover;
}
select {
  appearance: none;
  background-color: transparent ;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;

  // Stack above custom arrow
  z-index: 1;

  // Remove dropdown arrow in IE10 & IE11
  // @link https://www.filamentgroup.com/lab/select-css.html
  &::-ms-expand {
    display: none;
  }

  // Remove focus outline, will add on alternate element
  outline: none;
}

.select {
  display: grid;
  grid-template-areas: "select";
  align-items: center;
  position: relative;

  select,
  &::after {
    grid-area: select;
  }

  min-width: 15ch;
  max-width: 30ch;

  border: 1px solid var(--select-border);
  border-radius: 0.25em;
  padding: 0.25em 0.5em;

  font-size: 1.25rem;
  cursor: pointer;
  line-height: 1.1;

  // Optional styles
  // remove for transparency
  background-color: #fff;
  background-image: linear-gradient(to top, #f9f9f9, #fff 33%);

  // Custom arrow
  &:not(.select--multiple)::after {
    content: "";
    justify-self: end;
    width: 0.8em;
    height: 0.5em;
    background-color: var(--select-arrow);
    clip-path: polygon(100% 0%, 0 0%, 50% 100%);
  }
}

// Interim solution until :focus-within has better support
select:focus + .focus {
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  bottom: -1px;
  border: 2px solid var(--select-focus);
  border-radius: inherit;
}

select[multiple] {
  padding-right: 0;

  /*
   * Safari will not reveal an option
   * unless the select height has room to 
   * show all of it
   * Firefox and Chrome allow showing 
   * a partial option
   */
  height: 6rem;

  option {
    white-space: normal;

    // Only affects Chrome
    outline-color: var(--select-focus);
  }

  /* 
   * Experimental - styling of selected options
   * in the multiselect
   * Not supported crossbrowser
   */
  //   &:not(:disabled) option {
  //     border-radius: 12px;
  //     transition: 120ms all ease-in;

  //     &:checked {
  //       background: linear-gradient(hsl(242, 61%, 76%), hsl(242, 61%, 71%));
  //       padding-left: 0.5em;
  //       color: black !important;
  //     }
  //   }
}

.select--disabled {
  cursor: not-allowed;
  background-color: #eee;
  background-image: linear-gradient(to top, #ddd, #eee 33%);
}

.select + label {
  margin-top: 2rem;
}



.a1{
	margin-top: 3%;
	width: 10%;
	height: 57px;
	background: rgba(0, 128, 128, .8);
	 text-align: center;
	 color: #FFFFFF;
	 font-weight: 600;
      border-radius: 10px;
       box-shadow: 0px 0px 13px 1px rgba(0, 128, 128, .8);
       border: 2px solid rgba(0, 128, 128, .9);
}
.a1:hover{
	background-color: initial;
  background-position: 0 0;
  color: rgba(0, 128, 128, .8);
}
.afont1{
      font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
      font-size: 30px;
      position: relative;
      top: 10%;
    }

.b1{
    overflow-x: hidden;
    overflow-y: scroll;
	width: 600px;
	height: 70%;
	background: rgba(0, 128, 128, .8);
	border: 2px solid rgba(0, 128, 128, .9);
	border-radius: 20px;
    border-top-right-radius:0px ;
border-bottom-right-radius: 0px;
    margin-top: 40px;
 box-shadow: 0px 0px 13px 1px rgba(0, 128, 128, .8);
}

.b3{
	position: absolute;
	top: 200px;
	left: 100px;
}
.inpborder{
    border-radius: 8px;
    border: none;
    margin: 4px;
    background: #FFFFFF;
    color: black;
    width: 40%;
    height: 8%;
}
.addre{
	background:#FFFFFF ;
	border: none;
	border-radius:8px;
    width: 56%;
}
.bt{
  margin-top: 25px;
  background: rgba(0, 128, 128, .8);
  border: 1px solid rgba(0, 128, 128, .11);
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 18px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  padding: 10px 17px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}
.bt:hover,
.bt:active{
	background-color: initial;
    background-position: 0 0;
    color: rgba(0, 128, 128, .8);
}
.z1{
    font-size: 160%;
    margin-top: -6px;
    border: 1.89px solid whitesmoke;
    padding-top: -2px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 10px;
    background-color: rgba(0, 128, 128, .0000001);
    color: #FFFFFF;
}
.z2{
    margin-top: 8px;
}
.in1{
    width: 56%;
    margin-top: 4%;
}
.in2{
  padding-top: 5.9px;
  padding-left: 70px;
  margin-top:2.5%;
  border-radius: 8px;
    border: none;
    background: #FFFFFF;
    color: black;
    height: 8%;
  width: 56%;
  margin-left: 1%;
}
.fontp1{
  margin-top: 100%;
  font-size: 110%;
  color:#FFFFFF ;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>

	
<center>
	<div class="a1">
		<font class="afont1">SIGN UP</font>
	</div>
<div class="b1">
<form method="post" style="margin-top:13px"; enctype="multipart/form-data"><br>
<input type="text" name="name" placeholder=" Name" size="25" class="inpborder" required /> &nbsp
<input type="tel" id="phone" name="phone" size="25" placeholder=" Phone Number" class="inpborder" required><br><br>

<input type="email" name="em" placeholder=" Email" size="25" class="inpborder" required /> &nbsp
<input type="text" name="deg" placeholder=" Degree" class="inpborder" size="25" /> <br><br>

<input type="text" name="yoe" placeholder=" Years of Expereince" size="25" class="inpborder" required /> &nbsp 
<input type="text" name="spec" placeholder=" Specialization" size="25" class="inpborder" required /> <br><br>


<input type="text" name="charge" placeholder=" Charges" size="25" class="inpborder in1"><br><br>

<textarea placeholder=" Address" rows="4" cols="40" class="addre" name="address"></textarea><br>
<font class="fontp1">Please provide supporting document</font>
<input type="file" name="file" class="in2" ><br>
<input type="submit" name="submit" value="SUBMIT" class="bt">
</form>
</div>
</center>
</body>
</html>