<html>
<body>
<?php
if (isset($_POST["submit"]))
{
$a=$_POST["number1"];
$b=$_POST["number2"];
$temp=$a;
$a=$b;
$b=$temp;

echo "swapped varible is", $a,$b;
}
?>
<form action="#" method="post">

<table>

<tr>

<td> <label> value 1</label> </td>
<td> <input type="text" name="number1"</td>
</tr>

<tr>

<td> <label> value 2</label> </td>
<td> <input type="text" name="number2"</td>
</tr>

<tr>
<td colspan="2"> <input type="submit" name="submit"> </td>
</tr>

<table>
</form>
</body>
</html>
