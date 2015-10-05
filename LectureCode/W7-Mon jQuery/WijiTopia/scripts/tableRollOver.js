// a simple script for table rollovers in Wijitopia

// Don't forget the document.ready function!!!
$(document).ready(function(){

// code for the next several functions adapted from http://jsfiddle.net/MtF6E/ 

    $('tr').mouseover(function(){
        $('td', this).css({"background-color": "#dee1b9"});
    });

    $('tr').mouseout(function(){
        $('td', this).css({"background-color": "#ffffff"});
    });

})
	

