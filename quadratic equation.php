$a=$_POST["a1"];
echo $a."<br>";
$b=$_POST["b1"];
echo $b."<br>";
$c=$_POST["c1"];
echo $c."<br>";
$dis=$b^2-4*$a*$c;
echo $dis."<br>";
}
?>
<form action="#"method="post">
<table>
<center>
<title>find quadratic equation</title>
<body>
<tr>
<td>enter the number a</td>
<td><input type="text" name="a1"><br></td>
</tr>
<tr>
<td>enter the number b</td>
<td><input type="text" name="b1"><br></td>
</tr>
<tr>
<td>enter the number c</td>
<td><input type="text" name="c1"><br></td>
</tr>
<tr>
<td><input type="submit" name="save" value="click"></td>
</tr>
</center>
</table>
</form>
