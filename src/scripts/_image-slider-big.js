'use strict';

$(function () {
    
    $(".module-image-slider-big .slider").each(function (index, el) {
        var $this = $(el),
            $that = $this;
        
        if ($this.find('.slide').length > 1) {
            $this.on('init', function (slick) {
                adjustSliderControls(slick);
                // console.log($this.sliblings('.slider-controls'));
                $this.siblings('.slider-controls').addClass('slider-controls-enabled');
                adjustSliderControls(slick);
                $(window).on('resize', function () {
                    adjustSliderControls(slick);
                }).trigger('resize');
            }).on('reInit', function (slick) {
                    // console.log('Re Init');
                    adjustSliderControls(slick);
            }).slick({
                centerMode: true,
                centerPadding: '225px',
                // centerPadding: 0,
                slidesToShow: 1,
                slidesToScroll: 1,
                touchThreshold: 8,
                swipeToSlide: true,
                dots: true,
                infinite: true,
                cssEase: 'ease-out',
                variableWidth: true,
                variableHeight: false,
                arrows: true,
			    speed: 1500,
			    delay: 2500,
                prevArrow: $that.siblings('.slider-controls').find('.slider-control-left'),
                nextArrow: $that.siblings('.slider-controls').find('.slider-control-right'),
                responsive: [{
                    breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: 0,
                            slidesToShow: 1,
                            variableWidth: false
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            speed: 1000,
                            delay: 2000,
                            centerMode: true,
                            arrows: false,
                            slidesToShow: 1,
                            variableWidth: false,
                            centerPadding: 0,
                        }
                    }
                ]
            });

            function adjustSliderControls(slick) {
                let $slider = $(slick.target),
                    $controls = $slider.siblings('.slider-controls'),
                    $slideCentered = $slider.find('.slick-center');

                if ($(window).width() > 768 && $(window).width() < 1360) {
                    $controls.width($slideCentered.width());
                } else {
                    $controls.removeAttr('style');
                }
            }
        }
    })    
});