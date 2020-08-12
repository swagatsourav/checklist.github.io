<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#first_btn").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
  });

  $("a").click(function () { 
    $("#div1").slideToggle(1000);
    $("#div2").slideToggle(1500);
    $("#div3").slideToggle(2000);
  });

  

});
</script>
</head>
<body>

<p>Demonstrate fadeIn() with different parameters.</p>

<button id="first_btn">Click to fade in boxes</button><br><br>
<a>Click me</a>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

<div id="test_id" style="width:80px;height:80px;background-color:pink;">This is a test block</div>
<button id="second_btn">Click Me to toggle</button>



</body>
</html>
