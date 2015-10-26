<!doctype html>

<html>
	<head>
		<title>String and Math Manipulation</title>
	</head>

	<?php 
		// This lab deals with simple math and string manipulation. You will do this
		// by calculating the total amount of hours you have to study for classes every semester.

		// TODO: These are variables that hold the amount of credit hours per week for each
		// of your classes. If you have more classes, then add another variable, if you have less,
	    // then delete one variable and enter the amount of credit hours you have. 
		// IE. $class1 = 12.5  -- You can look these up either in coursepad.me This value represents
		// how much expected hours per week you have to work in your classes.
		$class1 = 5;
		$class2 = 5;
		$class3 = 5;
		$class4 = 5;

		// TODO: Add the classes into a variable called $total that represents the amount of hours 
		// you are expected to put into for all your classes for the whole week.
		$total = $class1 + $class2 + $class3 + $class4;

		// TODO: Multiple the $total by 15 to represent the amount of hours you need to study in a 
		// period of 15 weeks (a semester)

		$total = $total * 15;

		// TODO: Create a string variable that holds this string "I have to study for a total of {$total} hours this semester"
		// REMEMBER: You want to concatenate $total into the string, not type "{$total}"
		$output = "I have to study for a total of $total hours this semester";
	?>

	<body>
		<?php
			// TODO: echo the string that you created so that it show up on the webpage
			echo $output;
		?>
	</body>
</html>