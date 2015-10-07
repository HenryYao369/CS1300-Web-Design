// My external script!
$(function() {

    $("#btn").on("click", function(){ // (b)

        // jQuery selectors are like CSS: they can affect
        // multiple elements at once. The below line
        // grabs a 'p' tags on the page and hides them.
        $("p").hide();

    });

});
