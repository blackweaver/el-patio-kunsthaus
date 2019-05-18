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