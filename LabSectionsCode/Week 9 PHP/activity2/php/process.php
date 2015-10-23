

<!doctype html>
<html>

    <head>
        <title>test</title>
    </head>

    <body>

    <?php

    // TODO: Declare the variables required for this form.
    // There are 7 variables you will need to declare (or 3 if you use an array)
    // If you use an array, you can store the information for all 5 classes in a variable

    // First variable example: You only need to declare them with a empty value
    // An empty string for a string or 0 for a number
    $name = "";
    $class1 = 0;

    $result = ""; //  跨section的PHP变量：一定要声明！！

    // TODO: Initialize the variables you created using if isset()
    // Remember the method you used is POST, so you will have to use the $_POST superglobal variable
    // isset() makes sure that the certain value is not NULL

//    if (isset($_POST['submit'])){ // 不注释掉这一行，结果出不来！


        // First example of using isset
        if (isset($_POST['name'])){
            // TODO: Initialize and set the $name variable to the form input
            $name = $_POST['name'];
        }

        // Now do this for ALL the variables that you have - remember that if you
        // are going to use an array to store all the class study hour numbers, you
        // have to make sure your if statement uses isset for all of the $POST inputs at the
        // same time
        if (isset($_POST['class1'])){
            $class1 = $_POST['class1'];
        }

        if (isset($_POST['class2'])){
            $class2 = $_POST['class2'];
        }

        if (isset($_POST['class3'])){
            $class3 = $_POST['class3'];
        }

        if (isset($_POST['class4'])){
            $class4 = $_POST['class4'];
        }

        if (isset($_POST['class5'])){
            $class5 = $_POST['class5'];
        }

        if (isset($_POST['semester'])){
            $semester = $_POST['semester'];
        }


        // If you used an array to store all the variables, you can use a loop to
        // add up all the study hour numbers per week for each class

        // TODO: Add up the weekly class hours into a variable called $total
        $total = $class1 + $class2 + $class3 + $class4 + $class5;

        // TODO: Now multiply the total weekly hours spent on all your classes by the semester
        // length chosen in the form. If you get a string to int conversion problem, use the intval()
        // function.
        $total = $total * intval($semester);

        // TODO: Create a string variable that holds:
        // "Hello. I am {$name} and my semester is {$semesterLength} long. The total hours I study for classes in a semester is {$total} hours"

        $result = "Hello. I am {$name} and my semester is {$semester} long. The total hours I study for classes in a semester is {$total} hours";

        // TODO: Now print that string value out using print() or echo

        echo $result;
//        print $result;



//    }  是这行的反括号：  if (isset($_POST['submit']))  // 不注释掉这一行，结果出不来！



//            echo "hello"; // test  // 忽然想起来5152 Fabian最后一周帮忙debug的痛苦经历。。。————是这行代码帮助找出了bug！！
    //    因为这行如果在if (isset($_POST['submit']))的外面则可以出现hello，如果在其之内则不会出现。
    //———因此bug就是那行多余的if判断代码带来的！


    ?>

    </body>


</html>

