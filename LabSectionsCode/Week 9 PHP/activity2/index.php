<!doctype html>

<html>
	<head>
		<title>Classes and Hours Spent</title>
	</head>

	<body>
		<form action="php/process.php" method="post">

			<legend>Enter your name</legend>
			Name: <input type="text" name="name"><br><br>

			<legend>Enter The Amount of Hours You Spend on Each Class</legend>
			<legend>Note: Please enter 0 for extra class fields</legend><br>

			<div>
				Class 1: <input type="number" name="class1"><br>
				Class 2: <input type="number" name="class2"><br>
				Class 3: <input type="number" name="class3"><br>
				Class 4: <input type="number" name="class4"><br>
				Class 5: <input type="number" name="class5"><br><br>
			</div>

			<legend>How long is your semester?</legend>
			<div>
				<input type="radio" name="semester" value="14">14 Week Semester<br>
				<input type="radio" name="semester" value="15">15 Week Semester<br><br>
			</div>

			<input type="submit" name="submitButton">
		</form>
	</body>
</html>