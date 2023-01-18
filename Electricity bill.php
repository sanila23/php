<?php
	$amount=NULL;
	if (isset($_POST["calc"]))
	{
		$total_units=$_POST["watts"];
		if ($total_units < 51)
			$amount += (3.50*$total_units);
		else if($total_units > 50 && $total_units < 151)
		{
			$amount += (3.50*50);
			$amount += (4.00*($total_units-50));
		}
		else
		{
			$amount += (3.50*50);
			$amount += (4.00*100);
			$amount += (5.20*($total_units-150));
		}
	}
?>

<html>
	<head>
		<title>Electricity Bill Calculator</title>
	</head>
	<style>
		table{
			
		}
	</style>
	<body>
	<form action="#" method="post">
		<table>
			<tr>
				<td><input type="text" name="watts" id="wt" placeholder="Total Units Consumed"></td><td><input type="submit" name="calc" value="Click Here"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">Amount:<?php echo $amount ?></td>
			</tr>
		</table>
	</form>
	</body>
</html>