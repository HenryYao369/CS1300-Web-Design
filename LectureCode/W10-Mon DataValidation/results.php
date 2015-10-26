<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Simple Web Form Example</title>
    <link rel="stylesheet" type="text/css" href="css/webforms.css">
</head>

<body>

    <?php include "components/banner.php"; ?>
    <?php include "scripts/cylinderCalc.php"; ?>

    <div id="container">
        <p class="credit">Cylinder image adapted from <a href="https://en.wikipedia.org/wiki/Cylinder_%28geometry%29">Wikimedia</a>.</p>
        
        <div id="results">
            <img src="images/cylinder_xparent.png" alt="cylinder">
            <h3>For radius <?php echo $radius; ?> and height <?php echo $height; ?>:</h3>
            <ul>
                <li>Volume: <?php echo $resultsArray[0]; ?></li>
                <li>Surface Area: <?php echo $resultsArray[1]; ?></li>
            </ul>
        </div> <!-- end of results div -->
                
    </div> <!-- end of container div -->
    
</body>

</html>
