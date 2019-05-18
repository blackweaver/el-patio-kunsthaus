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