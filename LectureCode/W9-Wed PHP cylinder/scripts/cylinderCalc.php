<?php
// simple script to calculate the volume and surface area of a right cylinder.

	// variables
	$radius = floatval($_POST["radius"]);  // 0. 注意POST_ARRAY的用法，很关键！！！
	// 1.变量加"" ！！（原文件有错）
	// 2.type casting
	$height = floatval($_POST["height"]);

	$volume;
	$surfaceArea;
    $resultsArray = array();
	
	// functions
	function cylVolume($radius, $height) {
		$volume = round(M_PI * ($radius * $radius) * $height, 2);
		return $volume;
	}
	
	function cylSurface($radius, $height) {
		$surfaceArea = round((2 * M_PI * $radius * $height) + (2 * M_PI *($radius * $radius)), 2);
		return $surfaceArea;
	}
	
	// run 'em and show 'em
	$volume = cylVolume($radius, $height);
	$surfaceArea = cylSurface($radius, $height);
    $resultsArray[0] = $volume;
    $resultsArray[1] = $surfaceArea;

?>