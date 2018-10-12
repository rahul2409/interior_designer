$(document).ready(function(){
	new WOW().init();
	$(".showcase").owlCarousel({
		items:1,
		autoplay:true,
		smartSpeed:450,
		loop:true,
		animateIn:'fadeIn',
		animateOut:'fadeOut',
		animationDuration:5000,
		animationDelay:5000,
		autoplayHoverPause:true,
	});
	$('.testimonials').owlCarousel({
		items:1,
		autoplay:true,
		loop:true,
		smartSpeed:450,
		autoplayHoverPause:true,
	});
	$(".portfolio-grid").isotope({
		itemSelector:'.item',
		layoutMode:'fitRows'
	});
	$(".portfolio-list li").click(function(){
		$(".portfolio-list li").removeClass("active");
		$(this).addClass("active");
		
		var selector = $(this).attr('data-filter');
		$(".portfolio-grid").isotope({
			filter:selector,
		});
		return true;
	});
});