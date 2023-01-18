<html>
<head>
<title>Prime Number</title>
</head>
<body>
<h1><center><u>PRIME NUMBER</u></center></h1>
<br/>
<br/>
<form action=primenumber.php method="post">
Enter a Number:<input type="text" name="n">
<br><br>
<input type="submit" value="PRIME NUMBER">
<br><br>
<?php  
if($_POST)  
{  
    $n=$_POST['n'];  
    for ($i=2;$i<=$n-1;$i++) 
	{  
      if($n%$i==0) 
	  {  
      $value=True;  
      }  
    }  
if(isset($value) && ($value))
{  
     echo 'The Number '. $n . ' is not prime.';  
}  else 
{  
   echo 'The Number '. $n . ' is prime.';  
}   
}  
?>  