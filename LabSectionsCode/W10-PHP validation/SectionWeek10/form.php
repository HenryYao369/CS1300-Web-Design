<?php
        // var_dump($_POST); //Print the entire POST variable (if you want to see what's inside)
        
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            echo "<p>form submitted</p>";

			// insert the code to check if all fields are submitted
            if (isset($username) && isset($email) && isset($message)) {
                echo "<p>all fields were submitted</p>";
            }
            
			// insert the code to check if username is empty
            if (!isset($username)) {
                echo "<p>username is missing</p>";
            }
				
			// insert the code to check if email is empty	
			if (!isset($email)) {
                echo "<p>email is missing</p>";
            }
			
			// insert the code to check if message is empty
			if (isset($message)) {
                echo "<p>no message</p>";
            }
            
			// insert the code to check whether username 
			// is larger than 3 characters
            if (strlen($username) > 3)
                echo "<p>username is greater than 3 characters</p>";
            else {
                echo "<p>username is not greater than 3 characters</p>";
            }
            
			// insert the code to check whether message has more than 
			// 250 characters
            if (strlen($message) <= 250) {
                echo "<p>message is 250 characters or less</p>";
            } else {
                echo "<p>message is not 250 characters or less</p>";
            }
        } else {
            echo "<p>form was not submitted</p>";
            // do something here, or not
        }
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="style.css">
        </head>
    
        <body>
            <form action="form.php" method="POST">
                <div>
                    <label for="name">Name:</label>
                    <input id="" type="text" name="username" />
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input id="" type="email" name="email"/>
                </div>
                <div>
                    <label for="msg">Message:</label>
                    <textarea id="" name="message" placeholder="Please enter your message here."></textarea>
                </div>
                <div class="button">
                    <button type="submit" name = "submit">Send your message</button>
                </div>
                <p>Slightly modified from the code and guide available at <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form">MDN</a></p>
            </form>
        </body>
    </html>
