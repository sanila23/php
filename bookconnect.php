<?php
include "bookconnect.php"; if(isset($_POST['submit']))
{
 $ano=$_POST['sno'];
 $title=$_POST['title'];
 $author=$_POST['author'];
 $edition=$_POST['edition'];
 $publisher=$_POST['publisher'];
$sql = "INSERT INTO `books` ( `sno`,`title`, `author`, `edition`, `publisher`) VALUES (
'$sno','$title', '$author', '$edition', '$publisher')";
$result=$conn->query($sql); if($result==TRUE)
{ echo "new record created
successfully";
} else { echo
"Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
 <head>
 <title>newcustomer</title>
 </head>

 <body>
 <form method="POST" action="">
 <center>
 <h1>Register</h1><br>
 Sno<br>
 <input type="text" name="sno" required><br>
 <br>
 Title<br>
 <input type="text" name="title" required><br>
 Author<br>
 <input type="text" name="author" required><br>
 Edition<br>
 <input type="text" name="edition" required><br>
 Publisher<br>
 <input type="text" name="publisher" required>
 <br>
 <input type="submit" name="submit" value="Submit"><br><br><br><br><br>
 </center>
 </form>
 </body>
</html>