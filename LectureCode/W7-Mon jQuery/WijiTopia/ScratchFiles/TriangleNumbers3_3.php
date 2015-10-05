<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Triangle Numbers</title>
<style type="text/css">
	body {background: #eeeeee}
	table {background: #ffffff}
	td {font-family: monospace; font-size: 12pt}
	div.indented {margin-left: 5em}
</style>
</head>
<body>
<div class="indented">
<table border="1">
<thead>
	<tr>
		<th>Index</th>
		<th>Triangle Number</th>
		<th>Triangle</th>
	</tr>
</thead>
	<?php
		error_reporting(E_ALL);
		for ($triangleNumberIndex=1;$triangleNumberIndex<=10;$triangleNumberIndex++) // triangleNumberIndex is the place of the number in the sequence, 1 for the first number, 2 for the second number, and so on. It is also the number of rows in the triangle for that number.
		{
			echo "\t<tr>\n";
			$triangleNumber = $triangleNumberIndex * .5 * ($triangleNumberIndex + 1);	
			echo "\t\t",'<td align="center">',"$triangleNumberIndex</td>\n";
			echo "\t\t",'<td align="center">',"$triangleNumber</td>\n";
			echo "\t\t",'<td align="center">'; // Notice single outer quotation marks here to allow for inner quotation marks
			for ($starRows=1;$starRows<=$triangleNumberIndex;$starRows++) // Draw a number of rows equal to the triangle number's index.
			{
				for ($starAsterisks=1;$starAsterisks<=$starRows;$starAsterisks++) // Draw a number of asterisks equal to the row's index.
				{
					echo "* ";
				}
				echo "<br>";
			}
			echo "</td>\n";
			echo "\t</tr>\n";
		}
	?>
</table>
</div>
</body>
</html>