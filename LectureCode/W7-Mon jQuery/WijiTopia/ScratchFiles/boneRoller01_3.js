/*
*
* A script to roll the dice and fade them in.
* Same as 01_2, but starts to use the die roll too choose the die image.
* Also, make1Thru6 returns the number, not dieName
* Come to think of it, a significant refactoring!
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
    $("#die_0").attr("src","images/die_" + event.data.param1 + ".png");
    $("#die_0").fadeIn(250);
    $("#die_1").delay(125).fadeIn(250);
    return false; // this works, but prevents event bubbling.
} // end clickRoll function

// Onload 'em up, move 'em out!
$(document).ready(function() {
    $("#die_0").hide();
    $("#die_1").hide();
    var dieNumber = make1Thru6();
    $("#rollButton").click({param1: dieNumber}, pushImage);
}); // end document-ready function
