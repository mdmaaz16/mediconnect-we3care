<?php
session_start();
echo "Text entered by user: "$_GET['t1'] <br>";
echo "Captcha shown: $_SESSION[my_catcha] <br>";
if($_GET['val1']==$_SESSION[my_catcha])
{
	echo "Captcha Verified";
}
else
{
	echo "Captcha Not Verified Verified";
}
?>
