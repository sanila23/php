<html>
<body>
<form method="post">
Enter Armstrong Number/Other:
<input type="number" name="number1">
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php
if($_POST)
{
$number1 = $_POST['number1'];
$a1 = $number1;
$sum1 = 0;
while( $a1 != 0 )
{
$rem1 = $a1 % 10; 
$sum1  = $sum1 + ( $rem1 * $rem1 * $rem1 );
$a1  = $a1 / 10;
}
if( $number1 == $sum1 )
{
echo "Yes $number1 an Armstrong Number.";
}else
{
echo "$number1 is not an Armstrong Number.";
}
}
?>