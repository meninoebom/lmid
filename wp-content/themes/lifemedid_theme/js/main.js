jQuery(document).ready(function($) {

	//fancyboxy
	$("a#sample-calc").fancybox({'autoDimensions': true});
	
	//init fit text
    $(".homepage-hero-inner .mobile-cta ").fitText(3.5, { maxFontSize: '18px' });

	// Add class to menu parents
	$("#primary-main-menu li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	});
		
	// Scroll to top
	$('a[href="#top"]').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	// Search
	$('.header-search-toggle').click(function () {
		$(this).toggleClass('search-active');
		$('#header-search-wrapper').fadeToggle('slow');
	});
	
	// Phone/iPod/iPad's hover fix
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
    $(".filterable-grid li").click(function(){
        //we just need to attach a click event listener
    });
}
	
});