/*
*
* A script to roll the dice and fade them in.
* Same as 01, but generates a random number for the die roll.
*
*/

// Don't forget the document.ready function!!!
$(document).ready(function() {
    $("#die_0").hide();
    // $("#die_1").hide();
    // var x = 3;
    $("#rollButton").click(function() {
        var dieString = make1Thru6();
        // alert(event.data.param1);
        $("#die_0").fadeIn(500);
        // alert(dieString);
        // $("#die_1").fadeIn(500);
        return false; // this works, but prevents event bubbling.
    });
});

function make1Thru6() {
    // Generate a pseudo-random number 1-6 for the die roll, 
    // attach it to a name string
    var roll = Math.round(Math.random()*5) + 1;
    var dieName = "die_" + roll;
    return dieName;
    // alert(dieName);
} 




