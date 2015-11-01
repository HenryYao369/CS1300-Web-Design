<?php
/**
 * Created by PhpStorm.
 * User: Hengzhi
 * Date: 10/31/15
 * Time: 6:32 PM
 */

?>


<div id="banner">
    <!--
    note: this banner can only be used by html under "pages" folder, or its relative paths could cause errors!
    therefore, index.php is treated differently.
    reason for doing so: setting different absolute path in different server is costly(since we need to know
    its directory structure; therefore we'll only abstract html files under "pages" dir.)
    -->

    <h1>Hengzhi YAO</h1>


    <div id="nav">
        <span><a href="../index.php">Home</a>  </span>
        <!-- <span><a href="/CS1300Proj3/index.php">Home</a>  </span>
        this way is not easy to find paths:thus abandoned   -->

        <span><a href="projects.php">Projects</a>  </span>
        <span><a href="courses.php">Courses</a>  </span>
        <span><a href="traveling.php">Hobbies</a>  </span>
        <span><a href="contact.php">Contact</a>  </span>
        <span><a href="https://www.linkedin.com/in/hengzhiyao">LinkedIn</a>  </span>
    </div>

</div>  <!-- banner-->
