/*
* A script to roll the dice and fade them in.
*
*/

// Don't forget the document.ready function!!!
$(document).ready(function() {
    $("#die_0").hide();
    // $("#die_1").hide();
    $("#rollButton").click(function() {
        $("#die_0").fadeIn(500);
        // $("#die_1").fadeIn(500);
        return false; // this works, but prevents event bubbling.
    });
});
