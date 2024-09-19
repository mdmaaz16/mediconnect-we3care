<html>  
<body>   
   
<input type="checkbox" id="check1" name="pl" value="Hello">hello
<input type="checkbox" id="check2" name="pl" value="hi">hi
<input type="checkbox" id="check3" name="pl" value="lmao">lao  
<input type="checkbox" id="check4" name="pl" value="mmm">mmm
<input type="checkbox" id="check5" name="pl" value="bye">Python
<input type="checkbox" id="check6" name="pl" value="ty">Android 
<br>
<input type="checkbox" id="c" name="l" value="ty" onclick="hello()">confirm with your inputs 
<h4 style="color:green" id="result"></h4>     
  
<script>  
  function hello() {  
  var markedCheckbox = document.getElementsByName('pl');  
  for (var checkbox of markedCheckbox) {  
    if (checkbox.checked)  
      document.body.append(1 + ' ');  
    else
      document.body.append(0 + ' ');  
  }  
}  
</script>  
  
</body>  
</html> 