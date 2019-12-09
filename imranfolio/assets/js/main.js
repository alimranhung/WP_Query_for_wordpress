(function ($) {
	"use strict";

	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 300) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");
		}
	});


	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	//Preloder js start
	jQuery(window).load(function () {
		jQuery(".preloader-wrapper").fadeOut(1000);
	});
	//Preloder js end

	//Mouse Trial js start
	$(document).mousemove(function (e) {
		$('.mouse-pointer').css({
			left: e.pageX,
			top: e.pageY
		})
	});
	//Mouse Trial js end

	//smooth scroll or easing scroll
	$('li.smooth-scroll a').bind('click', function (event) {
		var $anchor = $(this);
		var headerH = '44';
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
		}, 100, 'easeInOutExpo');

		event.preventDefault();
	});

	//scroll spy
	$('body').scrollspy({
		target: '.navbar-collapse',
		offset: 95
	});

	$(document).ready(function () {
		$(".popup").each(function () {
			var image = $(this).find("img").attr("src");
			$(this).attr("href", image);
		})
	})

	var slider = tns({
		container: '.slider',
		items: 1,
		slideBy: 'page',
		autoplay: true,
		autoplayTimeout: 3000,
		nav: false,
		controls: false,
		autoHeight: true,
		speed: 1000,
		autoplayButtonOutput: false,
	});

})(jQuery);