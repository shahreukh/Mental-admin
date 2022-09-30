(function ($) {
	"use strict";

	/* ..............................................
	Loader 
	................................................. */

	$(window).on('load', function () {
		$('.preloader').fadeOut();
		$('#preloader').delay(550).fadeOut('slow');
		$('body').delay(450).css({ 'overflow': 'visible' });
	});
	/* ..............................................
	Navbar Bar
	................................................. */

	$('.navbar-nav .nav-link').on('click', function () {
		var toggle = $('.navbar-toggler').is(':visible');
		if (toggle) {
			$('.navbar-collapse').collapse('hide');
		}
	});

	$('#mental-carousel').on('slid.bs.carousel', function () {
		var totalItems = $('.carousel-item').length;
        console.log($('.carousel-item'))
		var currentIndex = $('.carousel-item.active').index() + 1;
        console.log('currentIndex', currentIndex)
		$('#carousel-index').html('' + currentIndex);
		$('#carousel-count').html('/' + totalItems + '');
	});

	/* ..............................................
	Carousel - Change on scroll
	................................................. */

	// $('#mental-carousel').bind('mousewheel', function (e) {
	// 	e.preventDefault();
	// 	if (e.originalEvent.wheelDelta / 120 > 0) {
	// 		$(this).carousel('next');
	// 	} else {
	// 		$(this).carousel('prev');
	// 	}
	// });

	/* ..............................................
	Fixed Menu
    
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.top-header').addClass('fixed-menu');
		} else {
			$('.top-header').removeClass('fixed-menu');
		}
	});
	

	................................................. */

	/* ..............................................
	Properties Filter
	................................................. */
	var Container = $('.container');
	Container.imagesLoaded(function () {
		var portfolio = $('.properties-menu');
		portfolio.on('click', 'button', function () {
			$(this).addClass('active').siblings().removeClass('active');
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue
			});
		});
		var $grid = $('.properties-list').isotope({
			itemSelector: '.properties-grid'
		});

	});

	/* ..............................................
	Gallery
	................................................. */
	const images = document.querySelectorAll(".rspv-image"),
		respContainer = document.querySelectorAll(".resp");

	[].slice.call(images).forEach(function (image) {
		image.addEventListener("load", function () {
			const ratio = calcRatio(image.naturalWidth, image.naturalHeight);
			addPadding(image, ratio);
		});
	});

	//Great common divisor
	function calcGCD (a, b) {
		return b === 0 ? a : calcGCD(b, a % b);
	}

	//Return ratio, example: 9/16 = 56.25
	function calcRatio (width, height) {
		const gcd = calcGCD(width, height),
			w = parseInt(width) / gcd,
			h = parseInt(height) / gcd;
		return h / w * 100;
	}

	function addPadding (image, padding) {
		// if (image.parentNode) image.parentNode.style.paddingBottom = padding + "%";
	}

	/* ..............................................
	Scroll To Top
	................................................. */

	$(document).ready(function () {

		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#scroll-to-top').fadeIn();
			} else {
				$('#scroll-to-top').fadeOut();
			}
		});

		$('#scroll-to-top').click(function () {
			$("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

	});


}(jQuery));

/* ..............................................
   google_map js
   ................................................. */

// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap () {
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		center: { lat: 40.645037, lng: -73.880224 },
		styles: [
			{
				elementType: 'geometry',
				stylers: [{ color: '#fefefe' }]
			},
			{
				elementType: 'labels.icon',
				stylers: [{ visibility: 'off' }]
			},
			{
				elementType: 'labels.text.fill',
				stylers: [{ color: '#616161' }]
			},
			{
				elementType: 'labels.text.stroke',
				stylers: [{ color: '#f5f5f5' }]
			},
			{
				featureType: 'administrative.land_parcel',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#bdbdbd' }]
			},
			{
				featureType: 'poi',
				elementType: 'geometry',
				stylers: [{ color: '#eeeeee' }]
			},
			{
				featureType: 'poi',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#757575' }]
			},
			{
				featureType: 'poi.park',
				elementType: 'geometry',
				stylers: [{ color: '#e5e5e5' }]
			},
			{
				featureType: 'poi.park',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#9e9e9e' }]
			},
			{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [{ color: '#eee' }]
			},
			{
				featureType: 'road.arterial',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#3d3523' }]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry',
				stylers: [{ color: '#eee' }]
			},
			{
				featureType: 'road.highway',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#616161' }]
			},
			{
				featureType: 'road.local',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#9e9e9e' }]
			},
			{
				featureType: 'transit.line',
				elementType: 'geometry',
				stylers: [{ color: '#e5e5e5' }]
			},
			{
				featureType: 'transit.station',
				elementType: 'geometry',
				stylers: [{ color: '#000' }]
			},
			{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [{ color: '#c8d7d4' }]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#b1a481' }]
			}
		]
	});

	var image = 'images/location_icon_map_cont.png';
	var beachMarker = new google.maps.Marker({
		position: { lat: 40.712775, lng: -74.005973 },
		map: map,
		icon: image
	});
}

