<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wijitopia</title>
	<link rel="stylesheet" href="css/WijiTopia01.css">
	<script src="../jQuery/jquery-1.10.2.js"></script>
</head>
<body>
<div id="main">

	<div id="banner">
		<img id="wijitBanner" src="images/WijitopiaInnerBanner01.png" alt="Wijitopia: Your 24/7 Source for Widgets" width="250" height="74">
	</div> <!-- end of banner div -->
	
	<div id="main">
	    <?php
	        echo '<p>Let\'s try to set the img src attribute...</p>';
	        $imageTag = "images/die_0";
	        $imageExtension = ".png";
	        $imageName = $imageTag . $imageExtension;
	        echo '<img src="'.$imageName.'" alt="blank die">';
	        echo "\n";
	    ?>
	    <?php
	        echo "This is the second script!";
	    ?>
	</div>

	<div id="footer">
		<img src="images/ValidHTML5.jpg" alt="Valid HTML5" width="83" height="31">
		<img src="images/ValidCSS.gif" alt="Valid CSS" width="83" height="31">
	</div> <!-- end of footer div -->
	
</div> <!-- end of main div -->

</body>
</html>

