<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Square Numbers</title>
<link rel="stylesheet" href="css/WijiTopia01.css">
</head>
<body>
<div class="indented">
<table border="1">
<thead>
	<tr>
		<th>Index</th>
		<th>Square Number</th>
		<th>Square</th>
	</tr>
</thead>
	<?php
		error_reporting(E_ALL);
		for ($squareNumberIndex=1;$squareNumberIndex<=10;$squareNumberIndex++) // squareNumberIndex is the place of the number in the sequence, 1 for the first number, 2 for the second number, and so on. It is also the number of rows in the square, and the number of points in each row, for that number.
		{
			echo "\t<tr>\n";
			$squareNumber = $squareNumberIndex * $squareNumberIndex;	
			echo "\t\t",'<td align="center">',"$squareNumberIndex</td>\n";
			echo "\t\t",'<td align="center">',"$squareNumber</td>\n";
			echo "\t\t",'<td align="center">'; // Notice single outer quotation marks here to allow for inner quotation marks
			for ($starRows=1;$starRows<=$squareNumberIndex;$starRows++) // Draw a number of rows equal to the square number's index.
			{
				for ($starAsterisks=1;$starAsterisks<=$squareNumberIndex;$starAsterisks++) // Draw a number of asterisks equal to the square number's index.
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
