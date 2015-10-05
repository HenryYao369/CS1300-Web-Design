/*
*
* A script to roll the dice and fade them in.
* Same as 01_1, but attempts to use the random (or a standin) as an argument.
* Also, moves the button click function to a separate function, i.e, not in
* the document ready function at the top.
*
*/

// functions
function make1Thru6() {
    // Generate a pseudo-random number 1-6 for the die roll, 
    // attach it to a name string
    var roll = Math.round(Math.random()*5) + 1;
    var dieName = "die_" + roll;
    return dieName;
    alert(dieName);
} // end make1Thru6 function

function clickRoll(event) {
    // Play with passing a hard-coded argument and displaying it.
    var dieString = make1Thru6();
    // alert(dieString);
    // alert("Inside the clickRoll function");
    // alert(event.data.param1);
    $("#die_0").fadeIn(250);
    $("#die_1").delay(125).fadeIn(250);
    return false; // this works, but prevents event bubbling.
} // end clickRoll function

// Onload 'em up, move 'em out!
$(document).ready(function() {
    $("#die_0").hide();
    $("#die_1").hide();
    var x = 3;
    $("#rollButton").click({param1: x}, clickRoll);
}); // end document-ready function
