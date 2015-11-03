
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact me</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <?php include 'templates/banner.php' ?>

    <div id="container">

        <div id="content">
            
            <h1 class="subtitle">Contact me</h1>

            <p>If you think I am the right person for your business, don't hesitate to contact me at: hy429@cornell.edu
            </p>

            <p>Or add me on <a href="https://www.linkedin.com/in/hengzhiyao">LinkedIn</a></p>
            <br><br>


            <p>You can also leave your contact and message here -- I'll get back to you soon!</p><br>

            <!--  Form code adapted from Cornell CS1300 lab section code-->
            <form action="contact.php" method="POST">
                <div>
                    <label for="name">Name:</label>
                    <input id="name" type="text" name="username" />
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input id="mail" type="email" name="email" />
                </div>
                <div>
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="message" placeholder="Please enter your message here."></textarea>
                </div>
                <div class="button">
                    <button type="submit" name="submit">Send your message</button>
                </div>
                <p>Slightly modified from the code and guide available at <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form">MDN</a></p>
            </form>

            <div id="form-response">
                <?php
                // Form/PHP code adapted from Cornell CS1300 lab section code
                // var_dump($_POST); //Print the entire POST variable (if you want to see what's inside)

                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    echo "<p>Your response has been recorded -- Thank you:)</p>";

                    if (isset($username) && isset($email) && isset($message)) {
                        echo "<p>all fields were submitted</p>";
                    }

                    if (empty($username)) {
                        echo "<p>username is missing</p>";
                    }

                    if (empty($email)) {
                        echo "<p>email is missing</p>";
                    }

                    if (empty($message)) {
                        echo "<p>no message</p>";
                    }

                    if (strlen($username) > 3) {
                        echo "<p>username is greater than 3 characters</p>";
                    } else {
                        echo "<p>username is not greater than 3 characters</p>";
                    }

                    if (strlen($message) <= 50) {
                        echo "<p>message is 50 characters or less</p>";
                    } else
                        echo "<p>message is more than 50 characters.</p>";

                } else {
                    // echo "<p>form was not submitted</p>";
                    // do something here, or not
                }
                ?>

            </div>


        </div>  <!--content-->


        <?php include 'templates/footer.php' ?>

    </div> <!--container-->


</body>
</html>