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