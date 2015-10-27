<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Simple Web Form Example</title>
    <link rel="stylesheet" type="text/css" href="css/webforms.css">
    <script language="javascript" type="text/javascript" src="scripts/validate.js"></script>
</head>

<body>

    <?php include "components/banner.php"; ?>

    <div id="container">
        <p>The most fun you can have without eating chocolate!</p>
        <form id="cylinderForm"  action="results.php" method="POST">
            <img src="images/cylinder_xparent.png" alt="cylinder">
            <p>Enter values for the radius and height of the cylinder:</p>
            <p><input name="radius" type="text" oninput="validateRadius();"><label>Radius</label></p>
            <p><input name="height" type="text" oninput="validateHeight();"><label>Height</label></p>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        <p class="credit">Cylinder image adapted from <a href="https://en.wikipedia.org/wiki/Cylinder_%28geometry%29">Wikimedia</a>.</p>
    </div> <!-- end of container div -->
    
</body>

</html>