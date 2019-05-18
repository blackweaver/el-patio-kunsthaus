'use strict';

$(function () {
    // General
	var $window = $(window),
	    $body = $('body'),
	    mobileBreakpoint = 767,
	    tabletBreakpoint = 990,
	    currentClientWidth,
	    currentClientViewport,
	    previousClientWidth = 0;

	/**
	 * Test breakpoints
	 */
	var testBreakpoints = function () {
	    currentClientWidth = $body.width();
	    switch (true) {
	        case ((previousClientWidth == 0 || currentClientViewport == 'tablet' || currentClientViewport == 'desktop') && currentClientWidth <= mobileBreakpoint):
	            $(document).trigger('switchBreakoint', 'mobile');
	            break;
	        case ((previousClientWidth == 0 || currentClientViewport == 'desktop' || currentClientViewport == 'mobile') && currentClientWidth <= tabletBreakpoint && currentClientWidth > mobileBreakpoint):
	            $(document).trigger('switchBreakoint', 'tablet');
	            break;
	        case ((previousClientWidth == 0 || currentClientViewport == 'tablet' || currentClientViewport == 'mobile') && currentClientWidth > tabletBreakpoint):
	            $(document).trigger('switchBreakoint', 'desktop');
	            break;
	        default:
	            break;
	    }
	    previousClientWidth = currentClientWidth;
	};

	// Add event listener for switching breakpoints
	$(document).on('switchBreakoint', function (event, currentBreakpoint) {
	    currentClientViewport = currentBreakpoint;
        manageSlick(currentBreakpoint);
	});

	$('.content-toggle').on('click', function(e){
		var $this = $(this),
		$expandableParent = $this.closest('.is-expandable'),
		$expandableContent = $expandableParent.find('.expandable-content');
		$expandableContent.slideToggle({
			start: function() {
				// if ($expandableParent.hasClass('is-expanded'))
					$(this).css('display', 'flex')
			},
			complete: function() {
				$expandableParent.toggleClass('is-expanded');
				$this.html($this.data(($expandableParent.hasClass('is-expanded') ? 'label-collapse' : 'label-expand')));
			}
		});
	})

	var onResize = function () {
	    testBreakpoints();
	}
	$window.on('resize', onResize).trigger('resize');

	// Manage Slick slider
	function manageSlick(currentBreakpoint) {
		var $cardsSlider = $('.cards-grid');
		$cardsSlider.each(function (index, el) {
			let $slider = $(el);
			if ($(this).hasClass("is-quotes")) {
				if ($(this).find("blockquote").length > 1) {
					if (!$slider.hasClass('slick-initialized')) {
						getSlider($slider, 1);
					}
				}
			} else if ($(this).closest(".module").hasClass("module-shop-suggestions")) {
				if (currentBreakpoint == "mobile" && !$slider.hasClass('slick-initialized')) {
					getSlider($slider, 2);
				} else if (currentBreakpoint != "mobile" && $slider.hasClass('slick-initialized')) {
					$slider.slick('unslick');
				}
			} else {
				if ($(this).find(".card").length > 1) {
					if (currentBreakpoint == "mobile" && !$slider.hasClass('slick-initialized')) {
						getSlider($slider, 1);
					} else if (currentBreakpoint != "mobile" && $slider.hasClass('slick-initialized')) {
						$slider.slick('unslick');
					}
				}
			}
		});
	}

	function getSlider(slider, slidesToShow) {
		return slider.slick({
			dots: true,
			speed: 1000,
			delay: 3000,
			autoplay: true,
			cssEase: 'ease-out',
			arrows: false,
			swipeToSlide: true,
			touchThreshold: 8,
			slidesToShow: slidesToShow,
			slidesToScroll: 1
		});
	}
	
	// function updateSlide(sliderSmall, $el) {
	// 	sliderSmall.update(true);
	// 	$el.find('.slide').each(function (index, el) {
	// 		$(el).find('figure').css({
	// 			'max-width': $(el).find('img').width()
	// 		});
	// 	});
	// }

	$('.module-image-slider-small .slider').each(function (index, el) {
		var $this=$(el),
			sliderSmall;

		if ($this.find('.slide').length > 1) {
			sliderSmall = $this.overlayScrollbars({
				overflowBehavior: {y:"hidden"},
				scrollbars: { clickScrolling: true }
			}).overlayScrollbars();
			
			$this.siblings('.slider-controls').find('.slider-control-right').on('mouseenter', function (e) {
				this.controlRight = setInterval(function () {
					sliderSmall.scroll({x: "+=10"});
					}, 25);
				}).on('mouseleave', function () {
					this.controlRight && clearInterval(this.controlRight);
				});

			$this.siblings('.slider-controls').find('.slider-control-left').on('mouseenter', function (e) {
				this.controlLeft = setInterval(function () {
					sliderSmall.scroll({x: "-=10"});
					}, 25);
				}).on('mouseleave', function () {
					this.controlLeft && clearInterval(this.controlLeft);
				});	
		}
		$(window).on('resize', function () {
			sliderSmall.update(true);
		});
		$(window).resize();
	})
});