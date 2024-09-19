<!DOCTYPE html>
<html>
<body>
<form method="post">


<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    echo "hello";
    $command = escapeshellcmd('D:\proj\t2.py');
    $output = shell_exec($command);
    echo $output;
    echo "hello";
}
?>




<!-- 
D:\Disease-Prediction-from-Symptoms-master\Disease-Prediction-from-Symptoms-master\infer.py -->