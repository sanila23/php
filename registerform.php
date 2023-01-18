<?php
include 'demo.php';
if(isset($_POST["Submit"]))
{
    $a=$_POST["n1"];
	
    $b=$_POST["a1"];
	
	$c=$_POST["p1"];
	
	$d=$_POST["g1"];
	
	$e=$_POST["Select"];
	
	$sql="INSERT INTO `registerform1`(`Name`, `Address`, `Phoneno`, `Gender`, `Country`) VALUES ('$a','$b','$c','$d','$e')";
	$r=mysqli_query($z,$sql);
	header("location:registerform.php");
	if	($r)
		echo "Inserted successfully";
	else
		echo "Not Inserted";
}
?>

<html>
<body>
<h1 align="center"> <b> <u> REGISTER FORM</u></b></h1>
<form action="#" method="POST">
<table border="1">
<tr>
<td>NAME:</td>
<td><input type="text" name="n1" size="50"></td>
</tr>
<tr>
<td>ADDRESS:</td>
<td><textarea name="a1" cols="60"></textarea></td>
</tr>
<tr>
<td>PHONE NO:</td>
<td><input type="text" name="p1" size="50"></td>
</tr>
<tr>
<td>GENDER:</td>
<td><input type="radio" name="g1" value="Male">MALE
    <input type="radio" name="g1" value="Female">FEMALE
	<input type="radio" name="g1" value="Other">OTHERS</td>
</tr>
<td>COUNTRY:</td>
<td><select name="Select">
<option>India</option>
<option>Pakistan</option>
<option>Brazil</option>
<option>China</option>
<option>Korea</option>
<option>Spain</option>
<option>France</option>
<option>America</option>
<option>Australlia</option>
<option>South Africa</option>
<option>Mexico</option>
<option>Russia</option>
<td>
</tr>
<tr>
<td><input type="Submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</html>