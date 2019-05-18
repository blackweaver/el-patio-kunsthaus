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
