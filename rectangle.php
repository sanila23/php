<?php
if(isset($_POST["save"]))
{
	$l=$_POST["length"];
	echo $l."</br>";
	$b=$_POST["breadth"];
	echo $b."</br>";
	$area=$l*$b;
	echo $area."</br>";
	$perimeter=2*($l+$b);
	echo $perimeter."</br>";
}
?>
<form action="#" method="post">
<table>
<center>
<title> Area and Perimeter of rectangle</title>
<body>
<tr>
<td>Enter the length:</td>
<td><input type="text" name="length"><br></td>
</tr>
<tr>
<td>Enter the breadth:</td>
<td><input type="text" name="breadth"><br></td>
</tr>
<tr>
<td><input type="submit" name="save" value="click"></td>
</tr>
</body>
</center>
</table>