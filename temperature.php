<html>
<head>
<meta charset="utf-8">
<strong><h1>Convert fahrenheit to Celcius</h1></strong>
</head>
<body align="center">
<center>
<form method="post">
<br><br><br>
 Enter Temprature in Fahrenheit :<input type="text" name="far">
<br><br><br>
<input type="submit" name= "submit" value="Convert" style="font-size: 20px; ">

   </center>
 
<?php
if(isset($_POST['submit']))
{
	$f= $_POST['far'];
	$c= ($f - 32) * (5/9);
	echo "<span style='background-color: #e4ddcb'>
	<center>
	<label class='col-sm-2 control-label' >Temprature in Celcius =</label>
	<input class='easypositive' value=$c >
	</center></span>";
}		
?>
</body>
</html