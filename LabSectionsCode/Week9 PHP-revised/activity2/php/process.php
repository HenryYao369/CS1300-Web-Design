<?php

	// TODO: Declare the variables required for this form.
	// There are 7 variables you will need to declare (or 3 if you use an array)
	// If you use an array, you can store the information for all 5 classes in a variable

	// First variable example: You only need to declare them with a empty value
	// An empty string for a string or 0 for a number
	$name = "";

	// TODO: Initialize the variables you created using if isset()
	// Remember the method you used is POST, so you will have to use the $_POST superglobal variable
	// isset() makes sure that the certain value is not NULL

	if (isset($_POST['submitButton'])){
		// First example of using isset
		if (isset($_POST['name'])){
			// TODO: Initialize and set the $name variable to the form input
		}

		// Now do this for ALL the variables that you have - remember that if you
		// are going to use an array to store all the class study hour numbers, you
		// have to make sure your if statement uses isset for all of the $POST inputs at the
		// same time


		// If you used an array to store all the variables, you can use a loop to
		// add up all the study hour numbers per week for each class

		// TODO: Add up the weekly class hours into a variable called $total

		// TODO: Now multiply the total weekly hours spent on all your classes by the semester
		// length chosen in the form. If you get a string to int conversion problem, use the intval()
		// function.

		// TODO: Create a string variable that holds:
		// "Hello. I am {$name} and my semester is {$semesterLength} long. The total hours I study for classes in a semester is {$total} hours"

		// TODO: Now print that string value out using print() or echo
	}
	?>

