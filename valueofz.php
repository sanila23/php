<?php
if(isset($_POST["save"]))
{
	$a=$_POST["a1"];
	echo $a."</br>";
	$b=$_POST["b1"];
	echo $b."</br>";
	$z=($a^2+$b^3)/24*$a;
	echo $z."</br>";
}
?>
<form action="#" method="post">
<table>
<center>
<title> value of Z</title>
<body>
<tr>
<td>Enter the value of a:</td>
<td><input type="text" name="a1"><br></td>
</tr>
<tr>
<td>Enter the value of b: </td>
<td><input type="text" name="b1"><br></td>
</tr>
<tr>
<td><input type="submit" name="save" value="click"></td>
</tr>
</body>
</center>
</table>