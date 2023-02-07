// check js is running
var dateTime = new Date();
console.log('loading from scripts.js in codebar-v2 on: ' + dateTime);

// no-conflict wrapper
jQuery(document).ready(function($){

/* theme scripts go below
----------------------------------------------------------------------------- */

	$(document).ready(function() {
		$( '.navicon' ).on( 'click', function () {
			$( document.body ).toggleClass( 'show-nav');
		});
	}); // end doc ready

/*
----------------------------------------------------------------------------- */

}); // close no-conflict function
