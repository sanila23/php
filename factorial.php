<html>
<head>
<title>FACTORIAL OF A NUMBER</title>
</head>
<body>
<font size=5>FACTORIAL OF A NUMBER</font>
<br/>
<br/>
<form action=factorial.php method="post">
ENTER A NUMBER:<input type="text" name="t1">
<br><br>
<input type="submit" value="FACTORIAL">
<?php
if(isset($_POST["t1"]))
{
$n=$_POST["t1"];
$fact=1;
echo "<br/>
<br/>";
echo "Factorial of $n is: ";

while($n>0)
{
$fact=$fact*$n;
$n--;
}
echo "$fact";
}
?>
</form> 
</body>
</html>