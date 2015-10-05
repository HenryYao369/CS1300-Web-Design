<!DOCTYPE html>
<!-- based on 03_3 from hosting site -->
<html>
<head>
<meta charset="utf-8">
<title>Triangle Numbers</title>
<link rel="stylesheet" href="css/WijiTopia01.css">
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
