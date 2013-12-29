
jQuery(document).ready(function(){
	jQuery('ul li').click(function(event){
		jQuery('.active').removeClass('active');
		jQuery(this).addClass('active');
	});
	
	var divs = jQuery("#tab1, #tab2, #tab3");
		// Show chosen div, and hide all others
		jQuery("li a").click(function () {
		jQuery(divs).hide();
		jQuery("#" + jQuery(this).attr("class")).slideDown(500);							
	});	
		
});

