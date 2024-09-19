<!doctype html>
<html lang="en">
  <head>
    
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
  margin-left: 37.5%;
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
  <span class="badge bg-secondary">New</span>
</div>


    <div class="hiddenCB newspaper">
<form method="post">

<input type="checkbox" id="check1" name="pl" value="Hello"><label for="check1">Itching</label><br>
<input type="checkbox" id="check2" name="pl" value="hi"><label for="check2">Nodalskin Eruptions</label><br>
<input type="checkbox" id="check3" name="pl" value="lmao"><label for="check3">Sneezing</label><br>
<input type="checkbox" id="check4" name="pl" value="mmm"><label for="check4">Skin Rash</label><br>
<input type="checkbox" id="check5" name="pl" value="bye"><label for="check5">Shivering</label><br>
<input type="checkbox" id="check6" name="pl" value="ty"><label for="check6">Chill</label><br>
<input type="checkbox" id="check7" name="pl" value="Hello"><label for="check7">Joint Pain</label><br>
<input type="checkbox" id="check8" name="pl" value="hi"><label for="check8">Stomach Pain</label><br>
<input type="checkbox" id="check9" name="pl" value="lmao"><label for="check9">Acidity</label><br>
<input type="checkbox" id="check10" name="pl" value="mmm"><label for="check10">Ulcers on Tongue</label><br>
<input type="checkbox" id="check11" name="pl" value="bye"><label for="check11">Muscle Wasting</label><br>
<input type="checkbox" id="check12" name="pl" value="ty"><label for="check12">Vomiting</label><br>

<input type="checkbox" id="check13" name="pl" value="Hello"><label for="check13">Burning Micturition</label><br>
<input type="checkbox" id="check14" name="pl" value="hi"><label for="check14">Spotting Urination</label><br>
<input type="checkbox" id="check15" name="pl" value="lmao"><label for="check15">Fatigue</label><br>
<input type="checkbox" id="check16" name="pl" value="mmm"><label for="check16">Weight Gain</label><br>
<input type="checkbox" id="check17" name="pl" value="bye"><label for="check17">Anxiety</label><br>
<input type="checkbox" id="check18" name="pl" value="ty"><label for="check18">Cold hands/feets </label><br>
<input type="checkbox" id="check19" name="pl" value="Hello"><label for="check19">Mood Swings</label><br>
<input type="checkbox" id="check20" name="pl" value="hi"><label for="check20">Weight Loss</label><br>
<input type="checkbox" id="check21" name="pl" value="lmao"><label for="check21">Restlessness</label><br>
<input type="checkbox" id="check22" name="pl" value="mmm"><label for="check22">Lethargy</label><br>
<input type="checkbox" id="check23" name="pl" value="bye"><label for="check23">Patches in Throat</label><br>
<input type="checkbox" id="check24" name="pl" value="ty"><label for="check24">Iregular Sugarlevel</label><br>

<input type="checkbox" id="1" name="pl" value="Hello"><label for="1">Cough</label><br>
<input type="checkbox" id="2" name="pl" value="hi"><label for="2">High Fever</label><br>
<input type="checkbox" id="3" name="pl" value="lmao"><label for="3">Sunken_eyes</label><br>
<input type="checkbox" id="4" name="pl" value="mmm"><label for="4">Breathlessness</label><br>
<input type="checkbox" id="5" name="pl" value="bye"><label for="5">Sweating</label><br>
<input type="checkbox" id="6" name="pl" value="ty"><label for="6">Dehydration</label><br>
<input type="checkbox" id="7" name="pl" value="Hello"><label for="7">Indigestion</label><br>
<input type="checkbox" id="8" name="pl" value="hi"><label for="8">Headache</label><br>
<input type="checkbox" id="9" name="pl" value="lmao"><label for="9">Yellowish Skin</label><br>
<input type="checkbox" id="10" name="pl" value="mmm"><label for="10">Dark Urine</label><br>
<input type="checkbox" id="11" name="pl" value="bye"><label for="11">Nausea</label><br>
<input type="checkbox" id="12" name="pl" value="ty"><label for="12">Loss of Appetite</label><br>
<input type="checkbox" id="13" name="pl" value="Hello"><label for="13">Pain behindthe Eyes</label><br>
<input type="checkbox" id="14" name="pl" value="hi"><label for="14">Back Pain</label><br>
<input type="checkbox" id="15" name="pl" value="lmao"><label for="15">Constipation</label><br>
<input type="checkbox" id="16" name="pl" value="mmm"><label for="16">Abdominal_Pain</label><br>
<input type="checkbox" id="17" name="pl" value="bye"><label for="17">Diarrhoea</label><br>
<input type="checkbox" id="18" name="pl" value="ty"><label for="18">Mild Fever </label><br>
<input type="checkbox" id="19" name="pl" value="Hello"><label for="19">Yellow Urine</label><br>
<input type="checkbox" id="20" name="pl" value="hi"><label for="20">Yellowing of Eyes</label><br>
<input type="checkbox" id="21" name="pl" value="lmao"><label for="21">Acute Liver_Failure</label><br>
<input type="checkbox" id="22" name="pl" value="mmm"><label for="22">Fluid overload</label><br>
<input type="checkbox" id="23" name="pl" value="bye"><label for="23">Swelling of Stomach</label><br>
<input type="checkbox" id="24" name="pl" value="ty"><label for="24">Swelled Lymph nodes</label><br>

<input type="checkbox" id="25" name="pl" value="Hello"><label for="25">Malaise</label><br>
<input type="checkbox" id="26" name="pl" value="hi"><label for="26">Distorted Vision</label><br>
<input type="checkbox" id="27" name="pl" value="lmao"><label for="27">Phlegm</label><br>
<input type="checkbox" id="28" name="pl" value="mmm"><label for="28">Tthroat Irritation</label><br>
<input type="checkbox" id="29" name="pl" value="bye"><label for="29">Redness of Eye</label><br>
<input type="checkbox" id="30" name="pl" value="ty"><label for="30">Sinus Pressure </label><br>
<input type="checkbox" id="31" name="pl" value="Hello"><label for="31">Runny Nose</label><br>
<input type="checkbox" id="32" name="pl" value="hi"><label for="32">Congestion</label><br>
<input type="checkbox" id="33" name="pl" value="lmao"><label for="33">Chest pain</label><br>
<input type="checkbox" id="34" name="pl" value="mmm"><label for="34">Weakness in Limbs</label><br>
<input type="checkbox" id="35" name="pl" value="bye"><label for="35">Fast heart rate</label><br>
<input type="checkbox" id="36" name="pl" value="ty"><label for="36">Pain during Bowel</label><br>

<input type="checkbox" id="37" name="pl" value="Hello"><label for="37">Pain in anal region</label><br>
<input type="checkbox" id="38" name="pl" value="hi"><label for="38">Bloody stool</label><br>
<input type="checkbox" id="39" name="pl" value="lmao"><label for="39">Irritation in anus</label><br>
<input type="checkbox" id="40" name="pl" value="mmm"><label for="40">Neck pain</label><br>
<input type="checkbox" id="41" name="pl" value="bye"><label for="41">Dizziness</label><br>
<input type="checkbox" id="42" name="pl" value="ty"><label for="42">Cramps </label><br>
<input type="checkbox" id="43" name="pl" value="Hello"><label for="43">Bruising</label><br>
<input type="checkbox" id="44" name="pl" value="hi"><label for="44">Obesity</label><br>
<input type="checkbox" id="45" name="pl" value="lmao"><label for="45">Swollen Legs</label><br>
<input type="checkbox" id="46" name="pl" value="mmm"><label for="46">SwollenBloodvessels</label><br>
<input type="checkbox" id="47" name="pl" value="bye"><label for="47">Puffy Face and Eye</label><br>
<input type="checkbox" id="48" name="pl" value="ty"><label for="48">Enlarged_Thyroid</label><br>

<input type="checkbox" id="49" name="pl" value="Hello"><label for="49">Brittle Nails</label><br>
<input type="checkbox" id="50" name="pl" value="hi"><label for="50">Swollen Extremeties</label><br>
<input type="checkbox" id="51" name="pl" value="lmao"><label for="51">Excessive Hunger</label><br>
<input type="checkbox" id="52" name="pl" value="mmm"><label for="52">Extra Maritalcontacts</label><br>
<input type="checkbox" id="53" name="pl" value="bye"><label for="53">Drying/Tingling Lips</label><br>
<input type="checkbox" id="54" name="pl" value="ty"><label for="54">Slurred Speech </label><br>
<input type="checkbox" id="55" name="pl" value="Hello"><label for="55">Knee pain</label><br>
<input type="checkbox" id="56" name="pl" value="hi"><label for="56">Hip joint pain</label><br>
<input type="checkbox" id="57" name="pl" value="lmao"><label for="57">Muscle weakness</label><br>
<input type="checkbox" id="58" name="pl" value="mmm"><label for="58">Stiff Neck</label><br>
<input type="checkbox" id="59" name="pl" value="bye"><label for="59">Swelling Joints</label><br>
<input type="checkbox" id="60" name="pl" value="ty"><label for="60">Movement Stiffness</label><br>


<input type="checkbox" id="61" name="pl" value="Hello"><label for="61">Spinning movements</label><br>
<input type="checkbox" id="62" name="pl" value="hi"><label for="62">Loss of Balance</label><br>
<input type="checkbox" id="63" name="pl" value="lmao"><label for="63">Unsteadiness</label><br>
<input type="checkbox" id="64" name="pl" value="mmm"><label for="64">Bodyside Weakness</label><br>
<input type="checkbox" id="65" name="pl" value="bye"><label for="65">Loss of smell</label><br>
<input type="checkbox" id="66" name="pl" value="ty"><label for="66">Bladder discomfort </label><br>
<input type="checkbox" id="67" name="pl" value="Hello"><label for="67">Foul smell of Urine</label><br>
<input type="checkbox" id="68" name="pl" value="hi"><label for="68">Cont. feel of Urine</label><br>
<input type="checkbox" id="69" name="pl" value="lmao"><label for="69">Passage of Gases</label><br>
<input type="checkbox" id="70" name="pl" value="mmm"><label for="70">Internal itching</label><br>
<input type="checkbox" id="71" name="pl" value="bye"><label for="71">Toxic look(typhos)</label><br>
<input type="checkbox" id="72" name="pl" value="ty"><label for="72">Depression</label><br>

<input type="checkbox" id="73" name="pl" value="Hello"><label for="73">Irritability</label><br>
<input type="checkbox" id="74" name="pl" value="hi"><label for="74">Muscle Pain</label><br>
<input type="checkbox" id="75" name="pl" value="lmao"><label for="75">Altered Sensorium</label><br>
<input type="checkbox" id="76" name="pl" value="mmm"><label for="76">Red spots over body</label><br>
<input type="checkbox" id="77" name="pl" value="bye"><label for="77">Belly pain</label><br>
<input type="checkbox" id="78" name="pl" value="ty"><label for="78">Abnormal-  Menstruation </label><br>
<input type="checkbox" id="79" name="pl" value="Hello"><label for="79">Dischromic patches</label><br>
<input type="checkbox" id="80" name="pl" value="hi"><label for="80">Watering from Eyes</label><br>
<input type="checkbox" id="81" name="pl" value="lmao"><label for="81">Increased Appetite</label><br>
<input type="checkbox" id="82" name="pl" value="mmm"><label for="82">Polyuria</label><br>
<input type="checkbox" id="83" name="pl" value="bye"><label for="83">Family history</label><br>
<input type="checkbox" id="84" name="pl" value="ty"><label for="84">Mucoid sputum</label><br>

<input type="checkbox" id="85" name="pl" value="Hello"><label for="85">Rusty sputum</label><br>
<input type="checkbox" id="86" name="pl" value="hi"><label for="86">Lack of-Concentration</label><br>
<input type="checkbox" id="87" name="pl" value="lmao"><label for="87">Visual Disturbances</label><br>
<input type="checkbox" id="88" name="pl" value="mmm"><label for="88">Receiving Blood transfusion</label><br>
<input type="checkbox" id="89" name="pl" value="bye"><label for="89">Receiving Unsterile injections</label><br>
<input type="checkbox" id="90" name="pl" value="ty"><label for="90">Coma</label><br>
<input type="checkbox" id="91" name="pl" value="Hello"><label for="91">Stomach bleeding</label><br>
<input type="checkbox" id="92" name="pl" value="hi"><label for="92">Distention of Abdomen</label><br>
<input type="checkbox" id="93" name="pl" value="lmao"><label for="93">Alcohol_consumpted</label><br>
<input type="checkbox" id="94" name="pl" value="mmm"><label for="94">Fluid Overload.1</label><br>
<input type="checkbox" id="95" name="pl" value="bye"><label for="95">Blood in Sputum</label><br>
<input type="checkbox" id="96" name="pl" value="ty"><label for="96">Prominent Veins on Calf</label><br>

<input type="checkbox" id="97" name="pl" value="Hello"><label for="97">Palpitations</label><br>
<input type="checkbox" id="98" name="pl" value="hi"><label for="98">Painful walking</label><br>
<input type="checkbox" id="99" name="pl" value="lmao"><label for="99">Pus filled Pimples</label><br>
<input type="checkbox" id="100" name="pl" value="mmm"><label for="100">Blackheads</label><br>
<input type="checkbox" id="101" name="pl" value="bye"><label for="101">Scurring</label><br>
<input type="checkbox" id="102" name="pl" value="ty"><label for="102">Skin Peeling</label><br>
<input type="checkbox" id="103" name="pl" value="Hello"><label for="103">Silver like Dusting</label><br>
<input type="checkbox" id="104" name="pl" value="hi"><label for="104">Dents in nails</label><br>
<input type="checkbox" id="105" name="pl" value="lmao"><label for="105">Inflammatory Nails</label><br>
<input type="checkbox" id="106" name="pl" value="mmm"><label for="106">Blister</label><br>
<input type="checkbox" id="107" name="pl" value="bye"><label for="107">Red-sore around Nose</label><br>
<input type="checkbox" id="108" name="pl" value="ty"><label for="108">Yellow Crust Ooze</label><br>


</div>
</form>

<div class="border2">


  <label class="container"> Confirm with your inputs*
  <input type="checkbox" class="checkimp" id="c" name="s" value="ty" onclick="hello()">
  <span class="checkmark "></span>
</label>




<form method="post">
  <!-- <input type="checkbox" class="checkimp" id="c" name="s" value="ty" onclick="hello()"> Confirm with your inputs  -->
  <br> 
<input type="submit" class="button-24 ab" name="submit" value="Predict">
<input type="button" class="button-24 ac" onclick='deSelect()' value="Deselect All"/>  
</form>
</div>
<br>
<br>

<script>  
  function hello() {  
    var s1=" ";
  var markedCheckbox = document.getElementsByName('pl');  
  for (var checkbox of markedCheckbox) {  
    if (checkbox.checked)
    {
      s1=s1+'1'+' ';
    }  
    else
    {
       s1=s1+'0'+' ';
    }
  }
  document.cookie='name='+s1;
}  
</script>
<?php
if(isset($_POST['submit']))
{
  echo $_COOKIE['name'];
  $t=$_COOKIE['name'];
  $fh=fopen("testFile.txt", 'w') or die("can't open file");
  fwrite($fh, $t);
  // echo $t;

  
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>




