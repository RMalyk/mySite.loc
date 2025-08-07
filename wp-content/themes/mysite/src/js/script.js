jQuery(function ($) {

	$('.bg_slider').slick({
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
	});

});

jQuery(function ($) {

	$('a[href^="#"]').click(function () {
		elementClick = jQuery(this).attr("href")

		if (elementClick.length > 1) {
			destination = jQuery(elementClick).offset().top - 100;
			jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
			return false;
		}
	});

});


