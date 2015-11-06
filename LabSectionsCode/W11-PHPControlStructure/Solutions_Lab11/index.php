<?php 

    $foods_array = array("apples", "bread", "lettuce", "oranges", "rice", "tomato");

    //TODO: Using a for loop, print each item on its own like
    //by starting with "I like to eat " preceding each word 
    //in the above $foods_array 
    for($i=0; $i<count($foods_array); $i++) {
        echo "I like to eat " . $foods_array[$i] . "<br>";
    }
    
    $cities_array = array(
        "New York" => "USA",
        "Paris" => "France",
        "Madrid"   => "Spain",
        "Barcelona"  => "Spain",
    );

    //TODO: Use a for each loop to print all cities in the country 'Spain'
    foreach($cities_array as $city=>$country) {
        if ($country == "Spain") {
            echo $city . "<br>";
        }
    }

    //TODO: Make an array of the following random values: "History", 3, True, 88, 4.0, "Spanish", False, True, "7.0"
    $subjects = array("History", 3, True, 88, 4.0, "Spanish", False, True, "7.0", "False");

    //TODO: Initialize four empty arrays -- one for strings, one for booleans, one for ints, one for doubles. If you do not know some of these terms, use Google!
    $stringArray = []; //array("History", "Spanish", "7.0", "False");
    $intArray = []; //array(3, 88);
    $booleanArray = []; //array(True, False, True);
    $doubleArray = []; //array(4.0);

    //TODO: Use a for loop to populate the four empty arrays above with the correct items from the $subjects array
    //Hint: Look up 'gettype' function.
    for ($k=0; $k<count($subjects); $k++) {
        echo gettype($subjects[$k]);
        if (gettype($subjects[$k]) == "string") {
            array_push($stringArray, $subjects[$k]);
        } elseif (gettype($subjects[$k] == 'boolean')) {
            array_push($booleanArray, $subjects[$k]);
        } elseif (gettype($subjects[$k] == 'double')) {
            array_push($doubleArray, $subjects[$k]);
        } else {
            array_push($intArray, $subjects[$k]);
        }
        //NOTE: could use an elseif for gettype == 'integer' as well
    }

    //TODO: Print intArray, booleanArray, doubleArray using foreach arrays
    foreach($intArray as $int) {
        echo $int;
    }


    //TODO: Print each item in $stringArray seperated by commas.
    //Make sure the last item ends with a period and no extra space.
    //Use a regular for loop.
    for ($j=0; $j<count($stringArray); $j++) {
        $tempVal = $j+1;
        if ($tempVal == count($stringArray)) {
            echo $stringArray[$j] . ".";
        } else {
            echo $stringArray[$j] . ", ";
        }
    }
    
?>