(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

$(function () {
    // Acordion exhibitions cards
    $(".accordion-item-title").each(function (index) {
        $(this).on('click', function (event) {
            $(this).parent().toggleClass('is-expanded').siblings().removeClass('is-expanded');
            event.preventDefault();
        });
    });
});
},{}],2:[function(require,module,exports){
'use strict';

$(function () {
    var $window = $(window),
        $modal = $(".module-general-modal"),
        $modalTrigger = $('*[data-modal]'),
        $filterIconTrigger = $('.header-filter.filter-trigger');

    // Set to close modal on window resize
    $window.resize(function () {
        window.kunsthaus.closeModal();
    });

    $modal.on('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
    });
    
    $modal.on('click', '.modal-close', function (event) {
        event.preventDefault();
    });
    
    $modal.on('click', '.social-list a, .modal-close', function (event) {
        event.stopPropagation();
        closeModal()
    });
    
    $filterIconTrigger.add($modalTrigger).on('click', function (event) {
        event.preventDefault();
        manageModals($(this));
    });

    function manageModals($relatedTrigger) {
        var $relatedModal = $("#" + $relatedTrigger.data('modal'));

        if ($relatedTrigger.find($relatedModal).length == 0) {
            $relatedTrigger.append($relatedModal)
            $relatedModal = $relatedTrigger.find('.module-general-modal');
        }

        if (!$relatedModal.hasClass('is-active')) {
            openModal($relatedModal,$relatedTrigger);
        } else {
            closeModal($relatedModal,$relatedTrigger);
        }
    }

    // Manage just the Modal Opening
    function closeModal($relatedModal, $relatedTrigger) {
        if ($relatedTrigger!=undefined) {
            $relatedTrigger.removeClass('modal-is-open');
        } else {
            $('.modal-is-open').removeClass('modal-is-open');
        }
        if ($relatedModal!=undefined) {
            $relatedModal.removeClass('is-active');
        } else {
            $(".module-general-modal.is-active").removeClass('is-active');
        }
    }
    window.kunsthaus.closeModal = closeModal;
    
    // Manage just the Modal Opening
    function openModal($relatedModal, $relatedTrigger) {
        $relatedModal.addClass('is-active');
        $relatedTrigger.addClass('modal-is-open');
    }

    var cardSpacer = '<div class="card-spacer">&nbsp;</div>';
    // Activate filter logic only if #grid children exists

    function isOdd(num) {
        return num % 2;
    }

    // Only process filtered grid if #grid exists
    var $filtered_items_list = $('#grid').children();
    if ($filtered_items_list.length) {
        
        function allocateGridSpacers($grid) {
            // Only allocate grid spacer in Angebot grid
            if ($grid.hasClass('angebot-grid')) {
                let substractFeaturedItem = 0,
                    $row = 0,
                    $column = 0,
                    featurePasted = false;
    
                $grid.children().each(function (index, element) {
                    let $el = $(element);
                    substractFeaturedItem = (index === 0 && $el.hasClass('offer-is-featured')) ? 1 : substractFeaturedItem;
    
                    if ($row == 0 && isOdd($column) || (substractFeaturedItem && $column == 0 && !featurePasted)) {
                        featurePasted=true;
                        $el.after(cardSpacer);
                        $row=1;
                        $column=0;
                    } else if ($row==1 && !isOdd($column) && $column!=0){
                        $el.after(cardSpacer);
                        $column=0;
                        $row=0;
                    } else {
                        $column++;
                    }
                })                
            }
        }
            
        $('.dropdown-option').on('click', function (event) {
            event.preventDefault();
            var $optionValue = $(this).text(),
            $filterValue = $(this).attr('data-filter');       
            $(this).addClass('is-active');
            $('.dropdown-option').not($(this)).removeClass('is-active');
            $('.filter-selected').find('.filter-selected-title').text($optionValue);
            $('.filter-selected').removeClass('is-active');
            $('.dropdown').fadeOut(300);
            $('#grid').empty().append($filterValue === '*' ? $($filtered_items_list) : $($filtered_items_list).filter('.' + $filterValue));
            $('.header-filter').addClass('is-active');
            allocateGridSpacers($('#grid'));
        });
        allocateGridSpacers($('#grid'));
    }
});                

},{}],3:[function(require,module,exports){
 'use strict';

$(function () {
    let $form = $('form.form'),
        $custom_select = $('.custom-select'),
        $custom_radio = $('.custom-radio'),
        $field_checkbox = $('.field-checkbox'),
        $datepicker = $('.datepicker');
        
    if ($custom_select.length > 0) {
        $custom_select.each(function() {
            let $thisCustomSelect = $(this);
            $thisCustomSelect.selectmenu({
                select: function (event, ui) {
                    validator.element($thisCustomSelect.parent().find('select'))
                }
            }).find("option").first().attr("disabled", true);
            $thisCustomSelect.selectmenu("refresh");
        });
    }
    
    if ($custom_radio.length > 0) {
        // $custom_radio.find("input").checkboxradio().on("change", function (event) {
            // validator.element($(event.target));
        // });
        $custom_radio.find("input").checkboxradio();
    }

    // Add date validator method
    function phoneValidation(value, element) {
        return this.optional(element) || /^\+?1?[0-9_ ]*$/.test(value);
    }
    $.validator.addMethod("PhoneValidator", phoneValidation, $('[data-rule-phone_number]').data('msg-phone_number'));

    function ukDateValidation(value, element) {
        return this.optional(element) || /^(?:(?:(?:(?:31[\/\.](?:0?[13578]|1[02]))|(?:(?:29|30)[\/\.](?:0?[13-9]|1[0-2])))[\/\.](?:1[6-9]|[2-9]\d)\d{2})|(?:29[\/\.]0?2[\/\.](?:(?:(1[6-9]|[2-9]\d)(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))|(?:0?[1-9]|1\d|2[0-8])[\/\.](?:(?:0?[1-9])|(?:1[0-2]))[\/\.](?:(?:1[6-9]|[2-9]\d)\d{2}))$/.test(value);
    }
    $.validator.addMethod("UKDate", ukDateValidation, $('[data-rule-custom_date]').data('msg-custom_date'));
    
    function validUrlValidation(value, element) {
        var url = $.validator.methods.url.bind(this);
        return value == '' || url(value, element) || url('http://' + value, element);
    }
    $.validator.addMethod("ValidCustomUrl", validUrlValidation, $('[data-rule-url_2]').data('msg-url_2'));        

    if ($form.length > 0) {
        // Initiate Validator
        var validator = $form.validate({
            highlight: function (element, errorClass, validClass) {
                if(element.name.indexOf("[]") > 0) {
                    $(element).closest('.boxes-checkboxs').addClass('on-error').removeClass('is-valid');
                } else {
                    $(element).parent().addClass('on-error').removeClass('is-valid');
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                if(element.name.indexOf("[]") > 0) {
                    $(element).closest('.boxes-checkboxs').addClass('is-valid').removeClass('on-error');
                } else {
                    $(element).parent().addClass('is-valid').removeClass('on-error');
                }
            },
            errorPlacement: function (error, element) {
                if (element.siblings(".error-message").length > 0) {
                    element.siblings(".error-message").html(error.text())
                } else {
                    element.closest('.field').find(".error-message").html(error.text());
                }
            },
            submitHandler: function (form) {
                form.submit();
            },
            rules: {
                url_2: {
                    ValidCustomUrl: true,
                },
                phone_number: {
                    PhoneValidator: true
                },
                delivery: {
                    required: true
                },
                'medium[]': {
                    required: true
                },
                'published[]': {
                    required: true
                },
                'frequency[]': {
                    required: true
                },
                'language[]': {
                    required: true
                }
            },
            // messages: {
            //     'language[]': "You must check at least 1 box",
            // },
            ignore: [],
        });

        // Initiate datepicker if exists
        if ($datepicker.length > 0) {
            $datepicker.each(function(index, el){
                let $picker = $(el);
                let $pickerAltField = $picker.siblings('.alt-field-datepicker');


                $picker.datepicker({
                    altField: $pickerAltField,
                    altFormat: 'yy-mm-dd',
                    dateFormat: (window.kunsthaus.currentLang === 'de') ? 'd.m.yy' : 'd/m/yy',
                    changeYear: true,
                    yearRange: 'c-110:c',
                    onSelect: function () {
                        validator.element($(this));
                    },
                    onClose: function () {
                        validator.element($(this));
                    },
                });

                if ($pickerAltField.length > 0 && $pickerAltField.val() != '') {
                    let $altDateArray = $pickerAltField.val().split('-');
                    $picker.datepicker('setDate', new Date($altDateArray[0], parseInt($altDateArray[1]) - 1, $altDateArray[2]));
                }

            }); 
        }
        // Set Every input inside a row to be validated
        refreshValidatorRules();
    }
   
    function refreshValidatorRules() {
        $.validator.addClassRules({
            'required-phone_number': {
                PhoneValidator: true
            },
            'required-url_2': {
                ValidCustomUrl: true
            },
            'required-date': {
                required: true,
                UKDate: true
            },
            'required-text': {
                required: true
            }
        });    
    }

    // Checkbox fee schedule
    $field_checkbox.find("input[type='checkbox']").bind('change', function (event) {
        $(this).parent().toggleClass("is-active", $(this).prop("checked"));
        $(this).prop("checked", $(this).parent().hasClass("is-active"));
    });

    // Radio Person two (paar) Old
    // $("input[type='radio']").change(function(event){
    //     event.preventDefault();
    //     let box = $(".box-person:last-child");
    //     if($(this).hasClass("radio-paar")) {
    //         box.css("display","block");
    //     } else {
    //         box.css("display","none");
    //     }
    // });
    
    // Radio Person two (paar) adjusted for backend, if anything talk with stirling 
    $("input[type='radio']").change(function(event){
        event.preventDefault();
        let box = $(".box-person:last-child");
        let boxInput = box.find('input');
        let boxSelect = box.find('select');
        if($(this).hasClass("radio-paar")) {
            box.css("display","block");
            if (! box.find('.field').hasClass('required')) {
                box.find('.field').addClass('required');
                boxInput.attr('data-rule-required','true');
                boxSelect.attr('data-rule-required','true');
            }
        } else {
            box.css("display","none");
            box.find('.grid-form').find('.field').removeClass('required');
            boxInput.removeAttr('data-rule-required','true');
            boxSelect.removeAttr('data-rule-required','true');
        }
    });

    // Cloning box name
    function updateElementIndex(el, prefix, ndx) {
        var id_regex = new RegExp('(' + prefix + '-\\d+)');
        var replacement = prefix + '-' + ndx;
        if ($(el).attr("for")) $(el).attr("for", $(el).attr("for").replace(id_regex, replacement));
        if (el.id) el.id = el.id.replace(id_regex, replacement);
        if (el.name) el.name = el.name.replace(id_regex, replacement);
    }

    function cloneMore(selector, prefix) {
        var $newElement = $(selector).clone(true),
            total = $('#id_' + prefix + '-TOTAL_FORMS').val();
        $newElement.find('.form-row-index').html(parseFloat(total)+1);
        $newElement.find('.remove-form-row').css({'display':'block'});
        $newElement.find('.on-error').removeClass('on-error');
        $newElement.find(':input').each(function () {
            var name = $(this).attr('name').replace('-' + (total - 1) + '-', '-' + total + '-');
            var id = 'id_' + name;
            $(this).attr({
                'name': name,
                'id': id,
                'aria-invalid': false
            }).val('').removeAttr('checked');
        });
        total++;
        $('#id_' + prefix + '-TOTAL_FORMS').val(total);
        $(selector).after($newElement);

        $newElement.find('.datepicker').removeClass('hasDatepicker').datepicker({
            altField: $newElement.find('.alt-field-datepicker '),
            dateFormat: (window.kunsthaus.currentLang === 'de') ? 'd.m.yy' : 'd/m/yy',
            altFormat: 'yy-mm-dd',
            changeYear : true,
            yearRange: 'c-110:c',
            onSelect: function () {
                validator.element($newElement.find('.datepicker'));
            },
            onClose: function () {
                validator.element($newElement.find('.datepicker'));
            },
        });
        refreshValidatorRules();
        return false;
    }

    // Delete Form Row
    function deleteForm(prefix, btn) {
        var total = parseInt($('#id_' + prefix + '-TOTAL_FORMS').val());
        if (total > 1) {
            btn.closest('.form-row').remove();
            var forms = $('.form-row');
            $('#id_' + prefix + '-TOTAL_FORMS').val(forms.length);
            for (var i = 0, formCount = forms.length; i < formCount; i++) {
                $(forms.get(i)).find(':input').each(function () {
                    updateElementIndex(this, prefix, i);
                });
            }
        }
        return false;
    }
    $(document).on('click', '.add-form-row', function (e) {
        e.preventDefault();
        cloneMore('.form-row:last', $(this).data('form-prefix'));
        return false;
    });
    $(document).on('click', '.remove-form-row', function (e) {
        e.preventDefault();
        deleteForm($(this).data('form-prefix'), $(this));
        return false;
    });
    
});
},{}],4:[function(require,module,exports){
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
},{}],5:[function(require,module,exports){
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
},{}],6:[function(require,module,exports){
'use strict';

$(function () {
    // General
    let $window = $(window),
        $body = $('body'),
        $mainHeader = $('#main-header'),
        $nav = $('nav'),
        $navBar = $mainHeader.children('.nav-bar'),
        $black = $(".remaining_screen"),
        $hamburger = $(".hamburger"),
        $goHome = $(".go-home"),
        $main = $(".nav-main"),
        $lang = $(".nav-languages-info"),
        $lensForm = $(".list-title form"),
        $lens = $(".lens"),
        $suche = $(".suche"),
        $newsForm = $(".newsletter form"),
        $linkBar = $(".nav-title ul"),
        $arrows = $(".nav-content button"),
        $menus = $(".nav-content ul" ),
        $navContent = $(".nav-content"),
        $bottom_bar = $(".bottom-bar"),
        $btn_bottom_bar_close = $(".close-bottom-bar");

    // Generals vars
    let lastScrollY = 0, newCurrent = null, level = 2, linkItems = [], linkElements = [];

    // Breakpoints
    let breakpoints = new Map();
    breakpoints.set("mobile", 320);
    breakpoints.set("tablet", 740);
    breakpoints.set("desktop", 980);
    breakpoints.set("wide", 1300);

    /* --- Match navigation with section --- */
    if ($main.find("a").length > 0) {
      $main.find("a").each(function( index ) {
        if($(this).data("page-id") == $main.data("active-page-id")) {
          const btn = $(this).parent().parent().parent().parent().find("span button").first(); 
          $(this).addClass("is-active");
          slideMenu(btn);
        }
      });
    }

    /* ----------------------- */
  
    if ($arrows.length > 0) {
      $arrows.each(function( index ) {
        $(this).on('click', function(event){
          event.stopPropagation();
          event.stopImmediatePropagation();
          slideMenu($(this));
          console.log($(this));
        });
      });
    }

    // Hamburger icon switch
    $hamburger.on('click', function(event){
      event.preventDefault();
      toggleMenu();
    });

    function toggleMenu() {
      $mainHeader.css("position","fixed");
      $body.toggleClass("is-open");
      $hamburger.toggleClass("is-active");
      $black.toggleClass( "is-showed" );
      /* if($hamburger.hasClass("is-active") && $nav.height() > $( window ).height()) {
        if($body.height() > $nav.height()) {
          window.scrollTo(0, 0);
          $mainHeader.css("position","absolute");
        }
      } */
    }

    // Newsletters switch
    $newsForm.find("input[type=email]").on('focusin', function (e) {
      $(e.target).parent().addClass('is-active');
    });

    $newsForm.find("input[type=email]").on('focusout', function(e){
      $(e.target).parent().removeClass('is-active');
    });

  
    //Lens switch
    $lens.add($suche).on('click', toggleSearch);
    $lensForm.find("input[type=text]").on('focusout', toggleSearch);

    function toggleSearch(event){
      event.stopPropagation();
      event.stopImmediatePropagation();
      $lens.add($lensForm).toggleClass("is-active");
    }

    // Black background switch
    $black.on('click', function(event){
      event.stopPropagation();
      event.stopImmediatePropagation();
      toggleMenu();
    });

    // Header scrolling effect
    var onScroll = function() {
      let windowScroll = $window.scrollTop(),
          scrollY = windowScroll > $navBar.outerHeight() * 1.25

      if (scrollY) {
        $body.addClass('scrolling');
        if (lastScrollY > windowScroll) {
          $body.addClass('scrollingUp').removeClass('scrollingDown');
        } else {
          $body.addClass('scrollingDown').removeClass('scrollingUp');
        }
      } else {
        $body.removeClass('scrolling').removeClass('scrollingDown').removeClass('scrollingUp');
      }
      lastScrollY = windowScroll;
    }
    $window.scroll(onScroll).trigger('scroll');

    // Navigation interaction
    $goHome.on('click', function(event){
      event.preventDefault();
      if(linkItems.length > 0) {
        linkItems = [];
        linkElements = [];
        $linkBar.html("");
        hiddenItems();
        $main.css("display","block");
        $lang.css("display","block");
        newCurrent = null;
      }
    });

    function setNewArrow() {
      $(".new button").each(function( index ) {
        $(this).on('click', function(event){
          slideMenu($(this));
          
          $(".linkBarItem").each(function( index ) {
            if(index < level - 1) {
              $( this ).toggleClass( "is-inactive" );
            }
          });
        });
      });
    }


		function slideMenu(btn) {
      const li = btn.parent().parent();
      hiddenItems();
      newCurrent = li.find("ul").first().clone();
      newCurrent.css("display","block");
      newCurrent.addClass("new");
      $navContent.append(newCurrent);
      setNewArrow();
      setLinksBar(btn, newCurrent);
    }

    function setLinksBar(btn, current) {
      const text = btn.parent().children(0).text();
      let node = "";
      node+= "<li><a href='#' class='linkBarItem is-inactive'>" + text + "</a></li>";
      linkItems.push(node);
      linkElements.push(current);
      $linkBar.html( linkItems.join('') );
      
      $(".linkBarItem").each(function( index ) {
        if(index < level - 1 && $(".linkBarItem").length > 1) {
          $( this ).on('click', function(event){
            $(this).addClass( "is-inactive" );
            hiddenItems();
            newCurrent = linkElements[index];
            newCurrent.css("display","block");
            newCurrent.addClass("new");
            $navContent.append(linkElements[index]);
            linkItems.splice(index + 1);
            linkElements.splice(index + 1);
            $linkBar.html(linkItems.join(''));
            setNewArrow();
          });
        } else {
          $( this ).addClass( "is-inactive" );
        }
      });
    }

    function hiddenItems() {
      if (newCurrent) newCurrent.remove();
      $menus.each(function() {
        $( this ).css("display","none" );
      });
    }

    //Close bottom bar
    if(!Cookies.get('bottom-bar')) {
      $bottom_bar.css('display', 'block');
    }

    $btn_bottom_bar_close.on('click', function(event){
      event.preventDefault();
      var inAnHour = new Date(new Date().getTime() + 60 * 60 * 1000);
      Cookies.set('bottom-bar', false, { expires: inAnHour });
      $bottom_bar.toggleClass("is-closed");
    });


    // New filters interactions
    let $posts_container = $('.filter-box');
    let posts = $posts_container.find('.filter-item');

    $('.dropdown-option').on('click', function (event) {
      event.preventDefault();
      var $optionValue = $(this).text();
      var $filterValue = $(this).attr('data-filter');
  
      $(this).addClass('active');
      $('.dropdown-option').not($(this)).removeClass('active');
      $('.filter-selected').find('span').text($optionValue);
      $('.filter-selected').removeClass('active');
  
      if ($filterValue === '*') {
        $posts_container.empty();
          $(posts).each(function () {
            $posts_container.append($(this));
          });
          $posts_container.addClass('grid-default');
          $posts_container.removeClass('grid-filtered-without-featured');
      } else {
          $posts_container.empty();
          $(posts).each(function () {
              if ($(this).hasClass($filterValue)) {
                  $posts_container.append($(this));
              }
          });
          $posts_container.removeClass('grid-default');
          if ($('.aspect-ratio-2-1').is(':visible')) {
              $posts_container.removeClass('grid-filtered-without-featured');
              $posts_container.addClass('grid-default');
          } else {
              $posts_container.removeClass('grid-default');
              $posts_container.addClass('grid-filtered-without-featured');
          }
          $('.header-filter').addClass('active');
      }
  });
});
},{}],7:[function(require,module,exports){
'use strict';

$(function () {
    $('.boxes-checkboxs').multiselect();
});

// Multiselect as jQuery method
$.fn.multiselect = function () {

    let $body = $('body'),
        $multiselect = $('.multiple-list'),
        $btn_multiselect_title = $('.multiple-list-title'),
        $btn_multiselect_content = $('.multiple-list-content');
        
    $(this).find("input[type='checkbox']").bind('change', function changeCheckbox(event) {
        let $checkbox = $(this);
        let $checkboxWrapper = $checkbox.parent();
        let $checkboxGroupWrapper = $checkbox.closest('.boxes-checkboxs');
        
        $checkboxWrapper.toggleClass("is-active", $(this).prop("checked"));

        let totalChecked = 0;
        $.each($checkboxGroupWrapper.find("input[type='checkbox']"), function () {
            totalChecked += $(this).is(':checked') ? 1 : 0;
        });

        $checkboxGroupWrapper.toggleClass("is-valid", totalChecked > 0);
        $checkboxGroupWrapper.toggleClass("on-error", !totalChecked > 0);
    });

    $body.on('click',function(event) {
        $multiselect.removeClass("is-open");
        $btn_multiselect_title.removeClass("ui-corner-top");
    });

    $btn_multiselect_content.on('click',function(event) {
        event.stopPropagation();
    });

    $btn_multiselect_title.on('click', function(event){
        event.stopPropagation();
        event.preventDefault();
        $(this).parent().toggleClass("is-open");
        $(this).toggleClass("ui-corner-top");
        $(this).parent().find("ul").css("width",$btn_multiselect_title.width() + "px");
    });
};
},{}],8:[function(require,module,exports){
'use strict';

$(function () {
    // Lists ID from https://trello.com/c/V6SyufS7
    // var listByLang = {
    //     'de': "bcb7ebee6a",
    //     'en': "5357111be6",
    //     'fr': "4cd5c6bdab",
    //     'it': "5357111be6"
    // }

    function launchMediaDistributor(mailList) {
        window.dojoRequire(["mojo/signup-forms/Loader"], function (L) {
            L.start({
                "baseUrl": "mc.us20.list-manage.com",
                "uuid": "4bad4276be43dfe1d025fdbc7",
                "lid": mailList,
                "uniqueMethods": true
            });
        })
        document.cookie = 'MCPopupClosed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
        document.cookie = 'MCPopupSubscribed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
    }

    $('.newsletter-subscription-link').on('click', function (event) {
        event.preventDefault();
        if ($(this).data('maillist-id')){
            launchMediaDistributor($(this).data('maillist-id'));
        }
    });
});
},{}],9:[function(require,module,exports){
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
},{}],10:[function(require,module,exports){
'use strict';

$(function () {
    $('.module-tabs .tabs-menu').tabs();
})

// Tabs as jQuery method, by MIG
$.fn.tabs = function () {
    var $tabsMenu = $(this),
        $tabsContent = $tabsMenu.next();

    $tabsMenu.children().each(function (index) {
        var $tab = $(this);
        $tab.tabLink = $tab.find('a');
        $tab.tabIndex = index;
        $tab.tabContentContainer = $tabsContent.children().eq(index);
        $tab.innerLink = $tab.tabContentContainer.find('.workshop-subtitle a');

        $tab.tabLink.add($tab.innerLink).on('click', function ($event) {
            $event.preventDefault();
            $tab.addClass('active').siblings().removeClass('active');
            $tab.tabContentContainer.addClass('active').siblings().removeClass('active');
            $(document).trigger("switchTab", $tab.tabContentContainer);
        });
    });
};
},{}],11:[function(require,module,exports){
'use strict';
let filters = require('./_filters');
let interactions = require('./_interactions');
let scroll_effects = require('./_scroll-effects');
let multiselect = require('./_multiselect');
let tabs = require('./_tabs');
let general = require('./_general');
let accordion = require('./_accordion');
let image_slider_big = require('./_image-slider-big');
let forms = require('./_forms');
let newsletter_subscription = require('./_newsletter-subscription.js');

function possiblyDebug(s) {
	if (window.debug) {
		console.log(s);
	}
}

},{"./_accordion":1,"./_filters":2,"./_forms":3,"./_general":4,"./_image-slider-big":5,"./_interactions":6,"./_multiselect":7,"./_newsletter-subscription.js":8,"./_scroll-effects":9,"./_tabs":10}]},{},[11]);
