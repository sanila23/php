<html>
<head>
<?php
echo "default"."<br><br>";
$s=array("Don","Kevin","Sam","Zam");
print_r($s);
asort($s);
echo "<br><br>"."Ascending order"."<br><br>";
print_r($s);
arsort($s);
echo "<br><br>"."Descending order"."<br><br>";
print_r($s);
?>
</head>
</html>