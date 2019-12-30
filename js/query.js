jQuery(function($){


	//$(window).load(function() {


/**
 *  Slider Navigation 
 */
		$('.slide-2').waypoint(function(direction) {
		        if (direction == "down") {
		            console.log('touch!!down!!!');
		        } else {
		            console.log('touch!!uppp!!!');
		        }
		    }, {
		        //offset: '60px;' /*60px before hit the section defined*/
		    })

	//});

})