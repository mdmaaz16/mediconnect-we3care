<?php
session_start();
if(isset($_POST['Navie']))
{
  $t=$_COOKIE['names'];
  $fh=fopen("dis.txt", 'w') or die("can't open file");
  fwrite($fh, $t);
   $command = escapeshellcmd('E:\xamp\htdocs\Project\NaiveBayes.py');
    $output = shell_exec($command);
    $_SESSION['dis']=$output;
    if(isset($_SESSION['dis']))
    {
      echo '<script type="text/javascript">';
       echo 'window.location.href = "pred_dis_op.php";';
       echo '</script>';

   }
    echo $output;     
}
else if(isset($_POST['Decision']))
{
  $t=$_COOKIE['names'];
  $fh=fopen("dis.txt", 'w') or die("can't open file");
  fwrite($fh, $t);
   $command = escapeshellcmd('E:\xamp\htdocs\Project\DecisionTree.py');
    $output = shell_exec($command);
    $_SESSION['dis']=$output;
    if(isset($_SESSION['dis']))
    {
      echo '<script type="text/javascript">';
       echo 'window.location.href = "pred_dis_op.php";';
       echo '</script>';
   }
    echo $output;  

}
else if(isset($_POST['Random']))
{
  $t=$_COOKIE['names'];
  $fh=fopen("dis.txt", 'w') or die("can't open file");
  fwrite($fh, $t);
   $command = escapeshellcmd('E:\xamp\htdocs\Project\RandomForest.py');
    $output = shell_exec($command);
    $_SESSION['dis']=$output;
    if(isset($_SESSION['dis']))
    {
      echo '<script type="text/javascript">';
       echo 'window.location.href = "pred_dis_op.php";';
       echo '</script>';

   }
    echo $output;  
}
else if(isset($_POST['Knn']))
{
  $t=$_COOKIE['names'];
  $fh=fopen("dis.txt", 'w') or die("can't open file");
  fwrite($fh, $t);
   $command = escapeshellcmd('E:\xamp\htdocs\Project\Knn.py');
    $output = shell_exec($command);
    $_SESSION['dis']=$output;
    if(isset($_SESSION['dis']))
    {
      echo '<script type="text/javascript">';
       echo 'window.location.href = "pred_dis_op.php";';
       echo '</script>';

   }
    echo $output;  
}
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Healthcare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
      p.a1 {
        margin-top: 25px;
        margin-left: 38%;
        white-space: nowrap;
        overflow: hidden;
         font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
        font-size: 250%;
        color: rgba(0, 128, 128, .8);
        font-weight: bold;
      }
      p.a1 {
        animation: animated-text 4s steps(30, end) 1s 1 normal both;
      }
      /* text animation */
      @keyframes animated-text {
        from {
          width: 0;
        }
        to {
          width: 600px;
        }
      }


.b1{
      position: relative;
      height: 61px;
      width: 60%;
      background: rgba(0, 128, 128, .8);
      margin-top: 0.1%;
      margin-left: 20%; 
      text-align: center;
      color: #FFFFFF;
      font-weight: 600;
      border-radius: 10px;
       box-shadow: 0px 0px 13px 1px rgba(0, 128, 128, .8);
    }
    .bfont1{
      font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
      font-size: 30px;
      position: relative;
      top: 15%;
    }
    .badge
    {
      position: relative;
      top: 10%;
      left: 0.5%;
      padding: 0.5% 0.7%;
    }





    .newspaper {
    -webkit-column-count: 4;  Chrome, Safari, Opera 
    -moz-column-count: 6; /* Firefox */
    column-count: 6;
    width: 84.99%;
    margin-top: 2%;
    margin-left: 7.78%;
    padding: 5px 105px 8px 6px;
     border: 2px solid rgba(0, 128, 128, .9);
     border-bottom: 0px;
     border-top-right-radius:6px ;
     border-top-left-radius:6px ;
     box-shadow: 0px 0px 13px 1px rgba(0, 128, 128, .8);
}

body {
   font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  
}
label {
  padding: 3px 6px;
  line-height: 190%;
  outline-style: none;
  transition: all .6s;
  font-weight: 540;
}

.hiddenCB div {
  display: inline;
  margin: 0;
  padding: 0;
  list-style: none;
}

.hiddenCB input[type="checkbox"],
.hiddenCB input[type="radio"] {
  display: none;
  
}

.hiddenCB label {
  cursor: pointer;
}

.hiddenCB input[type="checkbox"]+label:hover{
  background: rgba(0, 128, 128, .8);
}

.hiddenCB input[type="checkbox"]:checked+label {
  background: rgba(0, 128, 128, .4);
}

.hiddenCB input[type="checkbox"]:checked+label:hover{
  background: rgba(0, 128, 128, 0, .7);
}





.button-24 {
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

.button-24:hover,
.button-24:active {
  background-color: initial;
  background-position: 0 0;
  color: rgba(0, 128, 128, .8);
}



.border2{
  margin-left: 7.78%;
  width:  85%;
  border: 2px solid rgba(0, 128, 128, .9);
  border-top: 0px;
  border-bottom-right-radius:6px ;
     border-bottom-left-radius:6px ;
     box-shadow: 0px 0px 13px 1px rgba(0, 128, 128, .8) ;
}


.checkimp
{
  margin-top: 20px;
  margin-left: 50%;
  font-size: 14px;
  cursor: pointer;
}

.ab{
   margin-top: -5px;
  /*margin-left: 37.5%;*/
  margin-left: 40px;
  padding: 10px 19px;
  margin-bottom: 1.56%;
}
.ac{
   margin-top: -5px;
  margin-left: 1.8%;
  margin-bottom: 1.56%;
}


.container {
  display: block;
  width: 24%;
  position: relative;
  margin-left: 40.89%;
  padding-top: 1.5%;
  cursor: pointer;
   font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 21px;
  color: red;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 26px;
  left: -29px;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: rgba(0, 128, 128, .8);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

    </style>
  </head>
  <body>
    <p class="a1">PREDICT DISEASE</p>


<div class="b1">
  <font class="bfont1">Tell us your Symptoms, We will tell your Health Status</font>
  <!-- <span class="badge bg-secondary">New</span> -->
</div>


    <div class="hiddenCB newspaper">
<form method="post">



<input type="checkbox" id="check1" name="pl" value="back_pain"><label for="check1">Back pain</label><br>
<input type="checkbox" id="check2" name="pl" value="constipation"><label for="check2">Constipation</label><br>
<input type="checkbox" id="check3" name="pl" value="abdominal_pain"><label for="check3">Abdominal Pain</label><br>
<input type="checkbox" id="check4" name="pl" value="itching"><label for="check4">Itching</label><br>
<input type="checkbox" id="check5" name="pl" value="mild_fever"><label for="check5">Mild Fever</label><br>
<input type="checkbox" id="check6" name="pl" value="yellow_urine"><label for="check6">Yellow Urine</label><br>
<input type="checkbox" id="check7" name="pl" value="yellowing_of_eyes"><label for="check7">Yellowing of Eyes</label><br>
<input type="checkbox" id="check10" name="pl" value="swelled_lymph_nodes"><label for="check10">Swelled lymph Nodes</label><br>
<input type="checkbox" id="check11" name="pl" value="malaise"><label for="check11">Malaise</label><br>
<input type="checkbox" id="check12" name="pl" value="blurred_and_distorted_vision"><label for="check12">Blurred and Distorted Vision</label><br>
<input type="checkbox" id="check13" name="pl" value="phlegm"><label for="check13">Phlegm</label><br>
<input type="checkbox" id="check14" name="pl" value="throat_irritation"><label for="check14">Throat Irritation</label><br>
<input type="checkbox" id="check15" name="pl" value="redness_of_eyes"><label for="check15">Redness of Eyes</label><br>
<input type="checkbox" id="check16" name="pl" value="sinus_pressure"><label for="check16">Sinus Pressure</label><br>
<input type="checkbox" id="check18" name="pl" value="congestion"><label for="check18">Congestion </label><br>
<input type="checkbox" id="check20" name="pl" value="fast_heart_rate"><label for="check20">Fast heart Rate</label><br>
<input type="checkbox" id="check22" name="pl" value="bloody_stool"><label for="check22">Bloody Stool</label><br>
<input type="checkbox" id="check24" name="pl" value="neck_pain"><label for="check24">Neck Pain</label><br>

           
<input type="checkbox" id="3" name="pl" value="bruising"><label for="3">Bruising</label><br>
<input type="checkbox" id="4" name="pl" value="obesity"><label for="4">Obesity</label><br>
<input type="checkbox" id="6" name="pl" value="swollen_blood_vessels"><label for="6">Swollen blood Vessels</label><br>
<input type="checkbox" id="7" name="pl" value="puffy_face_and_eyes"><label for="7">Puffy face and Eyes</label><br>
<input type="checkbox" id="8" name="pl" value="enlarged_thyroid"><label for="8">Enlarged Thyroid</label><br>
<input type="checkbox" id="9" name="pl" value="brittle_nails"><label for="9">Brittle Nails</label><br>
<input type="checkbox" id="10" name="pl" value="swollen_extremeties"><label for="10">Swollen Extremeties</label><br>
<input type="checkbox" id="11" name="pl" value="excessive_hunger"><label for="11">Excessive Hunger</label><br>
<input type="checkbox" id="14" name="pl" value="slurred_speech"><label for="14">Slurred Speech</label><br>
<input type="checkbox" id="15" name="pl" value="knee_pain"><label for="15">Knee Pain</label><br>
<input type="checkbox" id="17" name="pl" value="muscle_weakness"><label for="17">Muscle Weakness</label><br>
<input type="checkbox" id="18" name="pl" value="stiff_neck"><label for="18">Stiff Neck</label><br>
<input type="checkbox" id="19" name="pl" value="swelling_joints"><label for="19">Swelling Joints</label><br>
<input type="checkbox" id="22" name="pl" value="loss_of_balance"><label for="22">Loss of Balance</label><br>
    
<input type="checkbox" id="25" name="pl" value="loss_of_smell"><label for="25">Loss of smell</label><br>
<input type="checkbox" id="26" name="pl" value="bladder_discomfort"><label for="26">Bladder Discomfort</label><br>
<input type="checkbox" id="28" name="pl" value="continuous_feel_of_urine"><label for="28">Continuous feel of Urine</label><br>
<input type="checkbox" id="32" name="pl" value="depression"><label for="32">Depression</label><br>
<input type="checkbox" id="33" name="pl" value="irritability"><label for="33">Irritability</label><br>
<input type="checkbox" id="34" name="pl" value="muscle_pain"><label for="34">Muscle Pain</label><br>
<input type="checkbox" id="36" name="pl" value="red_spots_over_body"><label for="36">Red spots over body</label><br>
<input type="checkbox" id="37" name="pl" value="belly_pain"><label for="37">Belly Pain</label><br>
<input type="checkbox" id="38" name="pl" value="abnormal_menstruation"><label for="38">Abnormal Menstruation</label><br>

<input type="checkbox" id="41" name="pl" value="skin_rash"><label for="41">Skin Rash</label><br>
<input type="checkbox" id="42" name="pl" value="polyuria"><label for="42">Polyuria</label><br>
<input type="checkbox" id="43" name="pl" value="family_history"><label for="43">Family History</label><br>
<input type="checkbox" id="44" name="pl" value="mucoid_sputum"><label for="44">Mucoid Sputum</label><br>
<input type="checkbox" id="45" name="pl" value="acute_liver_failure"><label for="45">Acute Liver Failure</label><br>
<input type="checkbox" id="46" name="pl" value="lack_of_concentration"><label for="46">Lack of Concentration</label><br>

<input type="checkbox" id="49" name="pl" value="continuous_sneezing"><label for="49">Continuous Sneezing</label><br>
<input type="checkbox" id="50" name="pl" value="shivering"><label for="50">Shivering</label><br>
<input type="checkbox" id="51" name="pl" value="chills"><label for="51">Chills</label><br>
<input type="checkbox" id="52" name="pl" value="joint_pain"><label for="52">Joint pain</label><br>
<input type="checkbox" id="53" name="pl" value="stomach_pain"><label for="53">Stomach pain</label><br>
<input type="checkbox" id="54" name="pl" value="acidity"><label for="54">Acidity</label><br>
<input type="checkbox" id="55" name="pl" value="vomiting"><label for="55">Vomiting</label><br>
<input type="checkbox" id="56" name="pl" value="mood_swings"><label for="56">Mood Swings</label><br>
<input type="checkbox" id="57" name="pl" value="fatigue"><label for="57">Fatigue</label><br>
<input type="checkbox" id="58" name="pl" value="weight_loss"><label for="58">weight_loss</label><br>
<input type="checkbox" id="59" name="pl" value="restlessness"><label for="59">Restlessness</label><br>
<input type="checkbox" id="60" name="pl" value="lethargy"><label for="60">Lethargy</label><br>

<input type="checkbox" id="61" name="pl" value="cough"><label for="61">Cough</label><br>
<input type="checkbox" id="62" name="pl" value="high_fever"><label for="62">High Fever</label><br>
<input type="checkbox" id="63" name="pl" value="breathlessness"><label for="63">Breathlessness</label><br>
<input type="checkbox" id="64" name="pl" value="sweating"><label for="64">Sweating</label><br>
<input type="checkbox" id="65" name="pl" value="indigestion"><label for="65">Indigestion</label><br>
<input type="checkbox" id="66" name="pl" value="headache"><label for="66">Headache</label><br>
<input type="checkbox" id="67" name="pl" value="dark_urine"><label for="67">Dark Urine</label><br>

<input type="checkbox" id="49" name="pl" value="nausea"><label for="49">Nausea</label><br>
<input type="checkbox" id="50" name="pl" value="loss_of_appetite"><label for="50">Loss of Appetite</label><br>
<input type="checkbox" id="51" name="pl" value="pain_behind_the_eyes"><label for="51">Pain ehind the Eyes</label><br>
<input type="checkbox" id="52" name="pl" value="chest_pain"><label for="52">Chest Pain</label><br>


</div>
</form>

<div class="border2">


  <label class="container"> Confirm with your inputs*
  <input type="checkbox" class="checkimp" id="c" name="s" value="ty">
  <span class="checkmark "></span>
</label>




<form method="post" style="margin-left: 180px;">
  <!-- <input type="checkbox" class="checkimp" id="c" name="s" value="ty" onclick="hello()"> Confirm with your inputs  -->
  <br> 
<input type="submit" class="button-24 ab" name="Navie" value="Navie Bayes">
<input type="submit" class="button-24 ab" name="Decision" value="Decision Tree">
<input type="submit" class="button-24 ab" name="Random" value="Random Forest">
<input type="submit" class="button-24 ab" name="Knn" value="KNN">
</form>
</div>
<br>
<br>

<script>  
  document.getElementById('c').onclick= function()
  {
    var box=[];
    i=0;
    var markedbox = document.getElementsByName('pl');
    for (var check of markedbox)
    {
      if(check.checked)
      {
        box[i]=check.value;
        i++;
      }
    }
    inp = box.toString();
    document.cookie='names='+inp;
  console.log(inp);
  }

  //document.write(box);
//   function hello() {  
//     var s1=" ";
//   var markedCheckbox = document.getElementsByName('pl');  
//   for (var checkbox of markedCheckbox) {  
//     if (checkbox.checked)
//     {
//       s1=s1+'1'+' ';
//     }  
//     else
//     {
//        s1=s1+'0'+' ';
//     }
//   }
//   document.cookie='name='+s1;
// }  
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>




