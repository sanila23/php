<?php
include 'demo.php';
$var=$_GET["a1"];
echo $var;
$r=mysqli_query($z,"DELETE FROM `registerorm1` WHERE `No`='$var'");
header("location:new.php");
?>