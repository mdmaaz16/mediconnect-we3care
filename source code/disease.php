<html>
<style>
body{
background: -webkit-linear-gradient(left, #2930af, #40c8ff);
}
h1{
	color: darkred;
}
</style>
<body>
	<h1>The predicted disease is <?php session_start(); $disease=$_SESSION['dis']; echo $disease;   ?></h1>
</body>


</html>