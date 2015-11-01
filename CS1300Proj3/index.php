<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hengzhi's Personal Site</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div id="banner">

        <h1>Hengzhi YAO</h1>

        <div id="nav">
            <span><a href="">Home</a>  </span>

            <span><a href="pages/projects.php">Projects</a>  </span>
            <span><a href="pages/courses.php">Courses</a>  </span>
            <span><a href="pages/traveling.php">Hobbies</a>  </span>
            <span><a href="pages/contact.php">Contact</a>  </span>
            <span><a href="https://www.linkedin.com/in/hengzhiyao">LinkedIn</a>  </span>
        </div>


    </div>  <!-- banner-->


    <div id="container">

        <div id="content">

            <div id="image">
                <p>
                    <img src="img/frontme.JPG" alt="backImage" height="422" width="638">
                    <!--note: img tag is Inline, so cannot put outside of <p> etc.!! -->
                </p>

                <div>
                    <p class="italic"> <i>The picture was taken by my father.</i> </p>
                </div>

            </div>  <!-- image-->

            <p>Hengzhi(Henry) Yao obtains Master from Cornell University, BEng from USTC, both in Electrical and Computer Engineering.
                <br>
                <a href="https://www.linkedin.com/in/hengzhiyao">LinkedIn</a>
            </p>


            <h2>Education</h2>

            <ul>
                <li>CORNELL UNIVERSITY, Ithaca, NY
                    <ul>
                        <li>Master of Engineering Degree in Computer Engineering: Dec.2015, GPA 3.75</li>
                    </ul>
                </li>

                <li>UNIVERSITY OF SCIENCE AND TECHNOLOGY OF CHINA (USTC), Hefei, P.R.China
                    <ul>
                        <li>Bachelor Degree in Electrical and Computer Engineering: Jun.2014</li>
                        <li>GPA 3.71, Major GPA 3.93, Math GPA 3.86,    <span class="italic"> 4 years Outstanding Student Scholarship, USTC</span> </li>
                    </ul>

                </li>


            </ul>


            <h2>Experience</h2>

            <ul>
                <li>
                    <span class="bold">Software Developer</span>, Cornell University, Dept of Computer Science, Feb.2015-May.2015 <br>
                    Built an Online Learning Platform (IDE etc.) from scratch to teach students JavaScript (<span class="bold">Open-Source</span>) .
                    <ul>
                        <li>Worked with an architect to choose backend architecture (Django, SQLite etc.). Wrote Unit Tests.</li>
                        <li>Built user signup/login/data management pages on both frontend and backend. (HTML/CSS, Python)</li>
                    </ul>
                    <br>
                </li>

                <li>
                    <span class="bold">Algorithm Developer</span>, Cornell, Computer Systems Laboratory(CSL),  Sep.2014-May.2015 <br>
                    Developed Artificial Intelligence algorithms on digital automation in Python.
                    <ul>
                        <li>Implemented Genetic Algorithm, Greedy Pattern variants, Simulated Annealing etc. to do the task.</li>
                        <li>Designed the algorithms to improve the running time from <span class="bold">18 hours</span> to <span class="bold">3.5 min</span> with the same accuracy.</li>
                    </ul>
                </li>


            </ul>


            <h2>Projects</h2>
            I love programming in my spare time.
            <a href="pages/projects.php">Look for more projects I've done.</a>

            <h2>Courses</h2>
            I've taken courses from both Systems and Analytics in my past study experience.
            <a href="pages/courses.php">Look for more courses I've taken.</a>

            <h2>Programming Skills (rank by familiarity) </h2>

            <p>
                Java, Python, Objective-C > Web Development(HTML, Python/Django), SQL, C, Linux, Git, MATLAB > Hadoop, R, Swift, Android
            </p>


        </div> <!--content-->

        <?php include 'pages/templates/footer.php' ?>


    </div> <!--container-->


</body>
</html>