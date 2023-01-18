<?php
include 'demo.php';
?>
<a href="registerform.php">Register Here</a>
<br>
<table border="1">
<tr>
<td>No</td>
<td>Name</td>
<td>Address</td>
<td>PhoneNo</td>
<td>Gender</td>
<td>Country</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
$r=mysqli_query($z,"SELECT * FROM `registerform1`");
print_r($r);
while($row=mysqli_fetch_array($r))
{
	?>
	
	<tr>
	<td>
	<?php echo $row['No'];?>
	</td>
	<td>
	<?php echo $row['Name'];?>
	</td>
	<td>
	<?php echo $row['Address'];?>
	</td>
	<td>
	<?php echo $row['Phoneno'];?>
	</td>
	<td>
	<?php echo $row['Gender'];?>
	</td>
	<td>
	<?php echo $row['Country'];?>
	</td>
	<td><a href="edit.php?a1=<?php echo $row["No"]; ?>">Update</a></td>
    <td><a href="delete.php?a1=<?php echo $row["No"]; ?>">Remove</a></td>
	</tr>
	<?php
}
?>
</table>