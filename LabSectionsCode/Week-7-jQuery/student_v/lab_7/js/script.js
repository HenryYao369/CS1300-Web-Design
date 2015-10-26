/** 

For each sub-exercise you will have to display the proper element 
modification when the input element "changes" or is "clicked." Think about
how this can be done with jQuery (HINT: look under "Events" in 
the jQuery API that is linked at the top right of the activity website)

*/

$(document).ready(function(){  // 注意这个ready function -- 所有东西都要在里面！！

	/* 1. Enable font color change for Lorem ipsum text ONLY: 
	HINT: Change text in #leftCol */

	// change to blue, #0000ff
	$('#blue').click(function(){
		//TODO: Change text color in #leftCol
		$('#leftCol').css("color","blue");
	});
	
	// TODO: change to green, #00ff00

    $('#green').click(function(){
        //TODO: Change text color in #leftCol
        $('#leftCol').css("color","#00ff00");
    });

	// TODO: change to yellow, #ffff00
    $('#yellow').click(function(){
        //TODO: Change text color in #leftCol
        $('#leftCol').css("color","#ffff00");
    });

	// TODO: back to initial color, use Chrome inspector to find out font color

    $('#initial_color').click(function(){
        //TODO: Change text color in #leftCol
        $('#leftCol').css("color","#4d4d4d");
    });


	/* 2. Enable font-family change for Lorem ipsum text ONLY: 
	HINT: Change text in #leftCol */

	// TODO: change to 'Helvetica'
    $('#helvetica').click(function(){
        //TODO: Change text color in #leftCol
        $('#leftCol').css("font-family","Helvetica");
    });
	// TODO: change to 'Times New Roman'
	
	// TODO: change to 'Arial'
	
	// back to initial font, use Chrome inspector to find out the font-family


	/* 3. TODO: Hide and Show text on Click */
    $('.showButton').click(function(){
        //TODO: Change text color in #leftCol
        //$('#leftCol').css("display","none");
        $('#leftCol').toggle();
    });

	/* 4. TODO: Enable font-size change for Lorem ipsum text ONLY, via button click: */

	// HINT 1: any attribute thats takes a value in px, must have the string 'px' in it,
	// think about how to add 'px' along with the value 
	// HINY 2: You want to be able to detect a click event on ".fontButton" when there is a 
	// change in 'input[type="text"]''--the first part has been done for you
	$('#textInput').change(function(){

        $('.fontButton').click(function(){
            $('#leftCol').css('font-size',$('#textInput').val()+'px');  // 你的bug:忘记 #textInput中的"#"--common mistake!!!
        });

		// BONUS ADVANCED jQuery: Validate inputs to make sure only numbers are entered 

	});

	/* 5. TODO: Enable background image change for body of HTML page */

	// Change background to 'doge.png' when checked and back to orignal 
	// when un-checked, make sure the image takes up whole background
	// space
	// HINT: you want to change the background size property in addition
	// to changing the background image
	
	
		// BONUS: Make Lorem ipsum font white when doge background is present (i.e. checkbox is checked)
		

	/* 6. TODO: Enable sliding up and down of green box with click */


	// DO NOT ALTER THIS CODE: Returns Lorem ipsum text to original state 
	$('.resetButton').click(function(){
		location.reload();
	});

});

