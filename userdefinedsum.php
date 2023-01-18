<?php
if(isset($_POST["Save"]))
{
echo "The First number:";
$x=$_POST["Firstnumber"];
echo $x;
echo "<br><br>";
echo "The Second number:";
$z=$_POST["Secondnumber"];
echo $z;
echo "<br><br>";
echo "The Sum of First and Second number:";
$sum=$x+$z;
echo $sum;
echo "<br><br>";
}
?>
<form action="#" method="post">
<table>
<tr>
<td>First Number:</td>
<td><input type="text" name="Firstnumber"></td>
</tr>
<tr>
<td>Second Number:</td>
<td><input type="text" name="Secondnumber"></td>
</tr>
<tr>
<td></td>
<td><input type="Submit" name="Save" value="Click Me"></td>
</tr>
</table>
</form>