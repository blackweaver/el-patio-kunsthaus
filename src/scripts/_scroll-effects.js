'use strict';

function possiblyDebug(s) {
    if (window.debug) {
        console.log(s);
    }
}

$(function () {
    // General
    let $body = $('body'),
        $sections = $('.scrolling-items > *'),
        $sliderButtons = $(".sidebar button");
    
    /**
     * ScrollMagic Main Controller
     */
    var pageScrollController = new ScrollMagic.Controller();

    let iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
    /**
     * Slider 
     */
    var scrollingSectionLength = $sections.length;
    if (scrollingSectionLength > 0) {
        $sections.each(function (index, el) {
            var $slide = $(el);
            var scene = new ScrollMagic.Scene({
                triggerElement: $slide,
                triggerHook: 0,
                duration: '100%'
            })
            .on("enter", function(event){
                setHighlightButton($sliderButtons.eq(index));
            })
            .on("start", function(event){
                if (index == scrollingSectionLength - 1)
                    $('.sidebar').removeClass('hidden');
            })
            .on("end", function(event){
                if (index == scrollingSectionLength - 1)
                    $('.sidebar').addClass('hidden');
            })
            .on("progress", function (event) {
                if (index == 0 && event.progress > 0.5) {
                    var inAnHour = new Date(new Date().getTime() + 60 * 60 * 1000);
                    Cookies.set('bottom-bar', false, {expires: inAnHour });
                    $(".bottom-bar").addClass("is-closed");
                }
            })            
            .addTo(pageScrollController);
            // .addIndicators();

            $(this).find(".next-section").on('click', function(event){
                var section = $sections.eq(index + 1);
                pageScroll(section.offset().top);
            });

            $sliderButtons.eq(index).on('click', function(event){
                setHighlightButton($(this).eq(index));
                pageScroll($sections.eq(index).offset().top,1.5);
            });
        });
        
    }
    
    // It uses GSAP
    function pageScroll(target, time, type) {
        target = target || 0;
        time = time || 1;
        let t = time * 1000;
        t = String(t);
        type = type || 'swing';

        if(iOS) {
            $body.animate({ scrollTop: target }, t, 'swing');
        } else {
            TweenLite.to(window, time, { scrollTo: target, ease: Power2.easeOut });
        }
    }
    
    $('.back-to-top-link').on('click', function (e) {
        e.preventDefault();
        pageScroll(0,1.5,'swing');
    });

    function setHighlightButton(btn) {
        $sliderButtons.removeClass("is-active");
        btn.addClass("is-active");
    }
    
	if ($('.play-in-view').length > 0) {
        function setupPlpayInView() {
            $('.play-in-view').each(function (index, el) {
                var $el = $(el);
                var scene = new ScrollMagic.Scene({
                    triggerElement: $el,
                    triggerHook: 0.5,
                    duration: '100%'
                })
                // .addIndicators()
                .on("enter", playVideo)
                .on("leave", pauseVideo)
                .addTo(pageScrollController);

                $(window).resize(function () {
                    // possiblyDebug($(document).width());
                    if ($(window).width() < 760) {
                        scene.trigger("leave");
                    }
                });
            });
        }
            
        function playVideo(event) {
            let video = $(event.target.triggerElement()).find('video:visible, iframe:visible');
            if (video.length > 0) {
                let player = (video.length > 0 && $(video).is("iframe")) ? new Vimeo.Player($(video)) : $(video);
                // possiblyDebug('Playing video');
                player.play();
            }
        }
        
        function pauseVideo(event) {
            let video = $(event.target.triggerElement()).find('video:visible, iframe:visible');
            let player;
            
            if ($(video).is("iframe")) {
                player = new Vimeo.Player($(video));
                player.getCurrentTime().then(function (response) {
                    if (response > 0){
                        // possiblyDebug('Pausing iframe video');
                        player.pause();
                    }
                });
            } else {
                player = $(video);
                if (player.currentTime > 0) {
                    // possiblyDebug('Pausing video');
                    player.pause();
                }
            }
        }
        setupPlpayInView();
	}


	/**
	 * Add body class based on dark or white theme in exhibition
	 * Each iframe/video or it's container needs the playInView class
	 */
	if ($('*[data-theme]').length > 0) {
        function initThemeSwitcher() {
            $('*[data-theme]').each(function (index, el) { // Select each block that has data theme-transition
	            var $trigger = $(el),
                sectionTheme = 'theme-' + $trigger.data('theme');
                $trigger.addClass(sectionTheme);

                // console.log($trigger.height());
                var themeTransitionScene = new ScrollMagic.Scene({
                    triggerElement: $trigger,
                    triggerHook: parseInt($('#site-logo').css('margin-top')) * 100 / $(window).height() / 100,
                    duration: $trigger.outerHeight()
                })
                .on("leave", function (e) {
                    $(e.target.triggerElement()).removeClass('is-active');
                    $body.removeClass('is-' + sectionTheme);
                })
                .on("enter", function(e) {
                    $(e.target.triggerElement()).addClass('is-active');
                    $body.addClass('is-' + sectionTheme);
                })
                
                .addTo(pageScrollController);
                // .addIndicators();
	        });
        }
        initThemeSwitcher();
    }
});