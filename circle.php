<?php
if(isset($_POST["save"]))
{
	$r=$_POST["radius"];
	$area=3.14*$r*$r;
	$perimeter=6.28*$r;
	echo $area."</br>";
	echo $perimeter."</br>";
}
?>
<form action="#"method="post">
<table>
<center>
<title>Area and Perimeter of Circle</title>
<body>
<tr>
<td>Enter the radius of circle:</td>
<td><input type="text" name="radius"><br></td>
</tr>
<tr>
<td><input type="submit" name="save" value="click"></td>
</tr>
</body>
</center>
</table>
</form>