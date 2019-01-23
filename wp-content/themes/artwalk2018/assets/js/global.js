/* loads at the end of <body>sss */

jQuery(document).ready(function($) {
	
	
	
	
	
	
	/*
	Smooth Scrolling
	https://css-tricks.com/snippets/jquery/smooth-scrolling/
	*/
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
		// On-page links
		if (
		  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		  && 
		  location.hostname == this.hostname
		) {
		  // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  // Does a scroll target exist?
		  if (target.length) {
			// Only prevent default if animation is actually gonna happen
			event.preventDefault();
			$('html, body').animate({
			  scrollTop: target.offset().top
			}, 1000, function() {
			  // Callback after animation
			  // Must change focus!
			  var $target = $(target);
			  $target.focus();
			  if ($target.is(":focus")) { // Checking if the target was focused
				return false;
			  } else {
				$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				$target.focus(); // Set focus again
			  };
			});
		  }
		}
	  });
	
	
	
	
	
	
	/*
	Responsive Menu
	*/
	$('#toggle').click(function() {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
	});
	
	
	
	
	
	
	/*
	Fade in body after load
	*/
	$('body').fadeIn("slow");
	
	
	
	
	
	
	/*
	jQuery Modal
	*/
	$('a[rel="modal:open"]').click(function(event) {
		$(this).modal({
			fadeDuration: 250
		});
		return false;
	});
	
	
	
	
	
	
	/*
	ScrollReveal
	https://github.com/jlmakes/scrollreveal
	// set defaults
	window.sr = ScrollReveal({
		// 'bottom', 'left', 'top', 'right'
		origin: 'bottom',

		// Can be any valid CSS distance, e.g. '5rem', '10%', '20vw', etc.
		distance: '10px',

		// Time in milliseconds.
		duration: 500,
		delay: 0,

		// Starting angles in degrees, will transition from these values to 0 in all axes.
		rotate: { x: 0, y: 0, z: 0 },

		// Starting opacity value, before transitioning to the computed opacity.
		opacity: 0,

		// Starting scale value, will transition from this value to 1
		scale: 0.8,

		// Accepts any valid CSS easing, e.g. 'ease', 'ease-in-out', 'linear', etc.
		easing: 'ease-in-out',

		// `<html>` is the default reveal container. You can pass either:
		// DOM Node, e.g. document.querySelector('.fooContainer')
		// Selector, e.g. '.fooContainer'
		container: window.document.documentElement,

		// true/false to control reveal animations on mobile.
		mobile: true,

		// true:  reveals occur every time elements become visible
		// false: reveals occur once as elements become visible
		reset: false,

		// 'always' — delay for all reveal animations
		// 'once'   — delay only the first time reveals occur
		// 'onload' - delay only for animations triggered by first load
		useDelay: 'always',

		// Change when an element is considered in the viewport. The default value
		// of 0.20 means 20% of an element must be visible for its reveal to occur.
		viewFactor: 0.5,

		// Pixel values that alter the container boundaries.
		// e.g. Set `{ top: 48 }`, if you have a 48px tall fixed toolbar.
		// --
		// Visual Aid: https://scrollrevealjs.org/assets/viewoffset.png
		viewOffset: { top: 0, right: 0, bottom: 0, left: 0 },

		// Callbacks that fire for each triggered element reveal, and reset.
		beforeReveal: function (domEl) {},
		beforeReset: function (domEl) {},

		// Callbacks that fire for each completed element reveal, and reset.
		afterReveal: function (domEl) {},
		afterReset: function (domEl) {}
	});
	
	// action to reveal elements
	sr.reveal('img#logo', {
		duration: 1000,
		distance: '0'
	}, 0);
	sr.reveal('section[name="Home"] p', {
		origin: 'top',
		duration: 1000,
		delay: 500
	}, 250);
	sr.reveal('section[name="Menus"] li', {
	}, 250);
	sr.reveal('section[name="Steak"] li.full .text', {
		duration: 1000,
		distance: '50px',
		scale: 1
	}, 0);
	sr.reveal('section[name="Steak"] li.col', {
		origin: 'top',
	}, 500);
	sr.reveal('section[name="Venue"] .text', {
		duration: 1000,
		distance: '50px',
		scale: 1
	}, 0);
	sr.reveal('section[name="Social"] li', {
	}, 250);
	sr.reveal('section[name="Gallery"] li', {
		rotate: {z: 15}
	}, 250);
	sr.reveal('footer li', {
	}, 250);
	*/
	


	
	
	
// end Document Ready Function
});