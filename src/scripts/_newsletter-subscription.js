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