jQuery(document).ready(function($) {
	// fitVids.
	$('.entry-content').fitVids();

	// Responsive wp_video_shortcode().
	$('.wp-video-shortcode').parent('div').css('width', 'auto');

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$('.odin-tabs a').click(function(e) {
		e.preventDefault();
		$(this).tab('show');
	});

	// Tooltip.
	$('.odin-tooltip').tooltip();

	/*==========================================================================
	DEPOIMENTOS
	========================================================================== */
	$('.depoimentos-list').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		dots: true,
		nav: false,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 3,
			}
		}
	});

	//Equalize
	$('.equal-height').equalize(); // defaults to height
	$('.equal-width').equalize('width'); // defaults to height
	$('.owl-stage').equalize(); // defaults to height


	/*==========================================================================
	Slider
	========================================================================== */

	$('.solucoes-list').bxSlider({
		mode: 'vertical',
		slideMargin: 15,
		infiniteLoop: true,
		nextSelector: '.slider-next',
		prevSelector: '.slider - prev ',
		nextText: '<i class="glyphicon  icon-angle-down"></i>',
		prevText: '← Go back',
		pager: false,
		responsive: true,
		breaks: [{
			screen: 0,
			slides: 1,
			pager: false
		}, {
			screen: 460,
			slides: 1
		}, {
			screen: 768,
			slides: 1
		}, {
			screen: 1024,
			slides: 3
		}]
	});

	/*==========================================================================
	Count to timer
	========================================================================== */

	$('.number_count').waypoint(function() {
		$(this).countTo({
			speed: 1600,
			formatter: function(value, options) {
				value = value.toFixed(options.decimals);
				value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
				return value;
			}
		});
	}, {
		triggerOnce: false,
		offset: 'bottom-in-view'
	});

	/*==========================================================================
	AnchorScroll
	========================================================================== */

	smoothScroll.init({
		selectorHeader: '.data-scroll-header', // Selector for fixed headers (must be a valid CSS selector)
		speed: 500, // Integer. How fast to complete the scroll in milliseconds
		easing: 'easeInOutCubic', // Easing pattern to use
		offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
		scrollOnLoad: true, // Boolean. If true, animate to anchor on page load if URL has a hash
		callback: function(toggle, anchor) {} // Function to run after scrolling
	});

	/*==========================================================================
	WALLOP
	========================================================================== */
	var wallopEl = document.querySelector('.Wallop');
	var slider = new Wallop(wallopEl);



});
