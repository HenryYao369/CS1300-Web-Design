$(function() {

    // On any <p> element...
    $("p").on("click", function(){

        // Only hide the element that was clicked, *NOT* all <p> elements!
        $(this).hide();

    });

});
