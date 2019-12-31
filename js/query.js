jQuery(function($){

/**
 *  Slider Navigation 
 */
	$('.silde-holder li').waypoint(function(direction) {
	        
	        if (direction == "down" || direction == "up") {
	        	var number = $(this)[0].element.className;
	    		if(number.charAt(number.length-1) === "1") {
	    			$('.active-number').html("1");
	    		} else if(number.charAt(number.length-1) === "2") {
	    			$('.active-number').html("2");
	    		} else if(number.charAt(number.length-1) === "3") {
	    			$('.active-number').html("3");
	    		}
	        }
	    })
})