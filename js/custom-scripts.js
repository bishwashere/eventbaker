jQuery(window).scroll(function () {
	// fixed menu in home page
	if (jQuery(window).scrollTop() > 100 ) {
		 $('body').addClass('fixedLogo');
	 }
	 else {
		 $('body').removeClass('fixedLogo');
	 }
	 
});
