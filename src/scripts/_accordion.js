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