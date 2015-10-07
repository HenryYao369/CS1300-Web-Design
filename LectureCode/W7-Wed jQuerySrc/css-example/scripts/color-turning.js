$(function() {

    // Click button to change text color of paragraphs
    $("#btn").on("click", function(){

        // Gray out all <p> elements.
        $("p").css("color", "lightgray");

    });

    // When mouse enters the element with id="colors",
    // change background color randomly.
    $('#colors').on('mouseover', function() {

        // From http://stackoverflow.com/questions/7379353/jquery-random-color-hover.
        var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ','
            + (Math.floor(Math.random() * 256)) + ','
            + (Math.floor(Math.random() * 256)) + ')';

        // Change background color to random hue.
        $('#colors').css('background-color', hue);
    });

});
