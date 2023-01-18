<?php
include 'demo.php';
$var=$_GET["a1"];
echo $var;
$r=mysqli_query($z,"UPDATE `registerorm1` SET `No`='[value-1]',`Name`='[value-2]',`Address`='[value-3]',`Phoneno`='[value-4]',`Gender`='[value-5]',`Country`='[value-6]' WHERE `No`='$var'");
header("location:new.php");
?>