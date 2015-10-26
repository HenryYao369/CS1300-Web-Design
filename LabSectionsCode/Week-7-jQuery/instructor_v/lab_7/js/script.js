/** 

For each sub-exercise you will have to display the proper element 
modification when the input element "changes" or is "clicked." Think about
how this can be done with jQuery (HINT: look under "Events" in 
the jQuery API that is linked at the top right of the activity website)

*/

$(document).ready(function(){

	/* 1. Enable font color change for Lorem ipsum text ONLY: */

	// change to blue, #0000ff
	$('#blue').change(function(){
		$('#leftCol').css({'color':'#0000ff'});
	});
	
	// change to green, #00ff00
	$('#green').change(function(){
		$('#leftCol').css({'color':'#00ff00'});
	});

	// change to yellow, #ffff00
	$('#yellow').change(function(){
		$('#leftCol').css({'color':'#ffff00'});
	});

	// back to initial color, #4d4d4d
	$('#initial_color').change(function(){
		$('#leftCol').css({'color':'#4d4d4d'});
	});


	/* 2. Enable font-family change for Lorem ipsum text ONLY: */

	// change to 'Helvetica'
	$('#helvetica').change(function(){
		$('#leftCol').css('font-family','Helvetica');
	});
	
	// change to 'Times New Roman'
	$('#times').change(function(){
		$('#leftCol').css('font-family','Times New Roman');
	});
	
	// change to 'Arial'
	$('#arial').change(function(){
		$('#leftCol').css('font-family','Arial');
	});
	
	// back to initial font, 'Nixie One'
	$('#initial_font').change(function(){
		$('#leftCol').css('font-family','Georgia');
	});


	/* 3. Enable hiding and showing of Lorem ipsum text, via button */
	$('.showButton').click(function(){
		$('#leftCol').toggle();
	});


	/* 4. TODO: Enable font-size change for Lorem ipsum text ONLY, via button click: */

	// HINT: any attribute thats takes a value in px, must have the string 'px' in it,
	// think about how to add 'px' along with the value 
	$('#textInput').change(function(){
		$('.fontButton').click(function(){
			$('#leftCol').css('font-size',$('#textInput').val()+'px');
		});

		// BONUS: Validate inputs to make sure only numbers are entered 
		var textInput = $('#textInput').val();
		if (!isNaN(textInput)) {
			$('#leftCol').css('font-size',textInput+'px');
			$('.textWarning').text('');
		} else {
			$('.textWarning').text('Try again and enter NUMBERS, only');
		}
	});

	/* 5.Enable background image change for body of HTML page */

	// Change background to 'doge.png' when checked and back to orignal 
	// when un-checked, make sure the image takes up whole background
	// space
	// HINT: you want to change the background size property in addition
	// to changing the background image
	$('#doge').click(function(){
		 $('body').css('background','url(img/doge.png)');
		 $('body').css('background-size','cover');

		// Obviously the above way is an inefficient way of 
		// writing multiple CSS changes but in the interest
		// of not confusing students by introducing JSON 
		// syntax refer to this as a solution

		// Another possible solution is:
		// $('body').css({
		//		background: 'url(img/doge.png)',
		//		'background-size': 'cover'
		// });

		// BONUS: Turns font color white when doge.png is 
		// set as background
		if ($('#doge').is(':checked')) {
			$('#leftCol,#rightCol').css('color','#fff');
		} else {
			$('body').css('background','url(img/notebook.png)');
			$('#leftCol,#rightCol').css('color','#4d4d4d');
		}
	});

	/* 6. Enable sliding up and down of green box with click */
	// HINT: This is a form of the hide / show functionality built into jQuery
	$('.toggleButton').click(function(){
		$('#toggleBox').slideToggle('slow');
	});
			
	// DO NOT ALTER THIS CODE: Returns Lorem ipsum text to original state 
	$('.resetButton').click(function(){
		location.reload();
	});

});

