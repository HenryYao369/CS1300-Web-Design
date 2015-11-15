
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

            <p>Or add me on <a href="https://www.linkedin.com/in/hengzhiyao">LinkedIn</a>.</p>
            <br><br>


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

                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

//                    echo "<p>try submit -- debug purposes</p>";

                    if (!empty($username) && !empty($email) && !empty($message)) {
                        echo "<p class='bold'>Hey $username ($email), </p>";
                        echo "<p class='bold'>Your response has been recorded! Thank you:)</p>";
                        echo "<p class='bold'>The message you leave is: $message</p>";
                    }
                    else{

                        if (empty($username)) {
                            echo "<p class='error'>Username is missing!</p>";
                        }

                        if (empty($email)) {
                            echo "<p class='error'>Please give me an email so I can contact you later!</p>";
                        }

                        if (empty($message)) {
                            echo "<p class='error'>Please leave a message!</p>";
                        }
                    }


                } else {
                    echo "<p>You can also leave your contact and message here.</p>";
                    echo "<p>I'll get back to you soon!</p>";
                }

                ?>

            </div>  <!--  <div id="form-response">-->

        </div>  <!--content-->


        <?php include 'templates/footer.php' ?>

    </div> <!--container-->


</body>
</html>