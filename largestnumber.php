<html>
<head>
<title>Largest Number</title>
</head>
<body>
<form method="post" action="#">
  Enter the first number:<br>
  <input type="text" name="n1"><br>
  Enter the second number:<br>
  <input type="text" name="n2"><br>
  Enter the third number:<br>
  <input type="text" name="n3">
  <br>
  <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
      $num1=$_POST["n1"];
      $num2=$_POST["n2"];
      $num3=$_POST["n3"];
      if($n1>$n2 && $n1>$n3)
	  {
        echo $n1;
      }
      else
	  {
        if($n2>$n1 && $n2>$n3)
		{
          echo $n2;
        }
        else
          echo $n3;
      }
  }
?>