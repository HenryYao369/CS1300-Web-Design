/*
*
* A script to roll the dice and fade them in.
* Same as 01_4, but hides the dice before each roll after the first.
*
* Needs a reset feature triggered by dropdown menu? To get the number
* of dice right?
*
*/

// functions
function make1Thru6() {
    // Generate a pseudo-random number 1-6 for the die roll
    var roll = Math.round(Math.random()*5) + 1;
    return roll;
} // end make1Thru6 function

function pushImage(event) {
    // Take the roll and sub the image.
    for (var i=0; i<3; i++) { // hide the dice after the first roll
        if ($("#die_" + i).is(":visible")) {
            $("#die_" + i).hide();
        } // end of if
    } // end of for
    for (count = 0 ; count < 3 ; count++) {
        var dieNumber = make1Thru6();
        $("#die_" + count).attr("src","images/die_" + dieNumber + ".png");
        $("#die_" + count).delay(125).fadeIn(250);
    }
    return false; // this works, but prevents event bubbling.
} // end clickRoll function

// Onload 'em up, move 'em out!
$(document).ready(function() {
// Check out http://stackoverflow.com/questions/10594557/pass-selected-value-to-function-using-jquery-selector
    $("#die_0").hide();
    $("#die_1").hide();
    $("#die_2").hide();    
    $("#rollButton").click(pushImage);
}); // end document-ready function
