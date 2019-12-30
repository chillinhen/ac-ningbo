jQuery(function ($) {
  //alert('hallo');
    function scrollUp() {
      $('html, body').animate({ scrollTop: 0 }, 800);
    }
    // set Tooltip Title
    var btnTooltip = $(".btn-tooltip");
    btnTooltip.each(function () {
      var tooltip = $(this).siblings(".tooltip-cnt").html();
      $(this)
        .attr('data-toggle', 'tooltip')
        .attr('data-placement', 'top')
        .attr('title', tooltip);
  
    });
    //Initialize BS Tooltips
    $('[data-toggle="tooltip"]').tooltip();
  
    //edit posts links
    $('.card-text .post-details').each(function () {
      $(this).children('.post-edit-link').wrapInner('<span></span>');
      $(this).children('.post-edit-link').prepend('<i class="fas fa-pen"></i>');
    });
  
    //bs page grid
    // $(".row.cols-50-50").children('div').addClass('col-lg-6');
    // $(".row.cols-30-70").children('div:first-child()').addClass('col-lg-4').next('div').addClass('col-lg-8');
    // $(".row.cols-70-30").children('div:first-child()').addClass('col-lg-8').next('div').addClass('col-lg-4');
    // $(".row.cols-3x40").children('div').addClass('col-lg-4');
    // $(".row.cols-4x30").children('div').addClass('col-lg-3');
    // $(".row.cols-100").children('div').addClass('col-lg-12');
  
    // Bottom Widgets
    if ($(".sidebar-footer > *").length) {
      $(".sidebar-footer").addClass("bg-light").addClass("p-3");
    }
    // Category Title
    var title = $(".category-title").text();
    spacePosition = title.lastIndexOf(" »");
    newTitle = title.substr(0, spacePosition);
    $(".category-title").html(newTitle);
  
  
    // category grids
    if ($("body").is(".logged-in")) {
      $(".post-details").addClass("justify-content-between");
    } else {
      $(".post-details").addClass("justify-content-end");
    }
  

  
    // set bs navbar
    if ($(window).width() > 991) {
      //console.log('larger than 992');
      mainNav = $('header .navbar');
      $('.navbar').css('display', 'block');
      mainNav.children('ul').addClass('navbar-nav justify-content-end level-1').children('li').addClass('nav-item').children('a').addClass('nav-link');
      mainNav.find('.sub-menu').addClass('dropdown-menu').children('li').children('a').addClass('dropdown-item');
      mainNav.find('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');
      mainNav.children('.level-1').children('.nav-item').children('.sub-menu').addClass('level-2');
      mainNav.find('.level-2').children('.menu-item').children('.sub-menu').addClass('level-3');
  
      $(".dropdown")
        .mouseover(function () {
          $(this).addClass('show').attr('aria-expanded', "true");
        })
        .mouseout(function () {
          $(this).removeClass('show').attr('aria-expanded', "false");
        });
    } else {
      offNav = $('#offMenu > ul ').addClass('nav flex-column');
      offNav.children('li').addClass('nav-item').children('a').addClass('nav-link');
      offNav.find('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');
      offNav.find('.sub-menu').addClass('dropdown-menu');
      offNav.children('.dropdown').each(function () {
        $(this).children('.dropdown-toggle').click(function (e) {
          e.preventDefault();
          $(this).css('opacity', '.5');
          $(this).siblings('ul').toggleClass('show');
        });
      });
    }
  
    /*** Off canvas ***/
    $('.toggle-nav').on('touchstart click', function (e) {
      $('#offMenu').toggleClass('open');
      $(this).toggleClass('open');
      e.preventDefault();
      scrollUp();
    });

    var navButton = $('#offMenu .menu-item-has-children > a');
        $('#offMenu .menu-item-has-children').each(function() {
            $(this).children('ul.sub-menu').prepend('<li class="menu-item parent-replacement"><a href="' + $(this).children('a').attr('href') + '">' + $(this).children('a').html() + '</a></li>');
        });
        navButton.on("touchstart", function (e) {
            e.preventDefault();
            $(this).toggleClass('dropdown');
            $(this).siblings('ul').toggleClass('show');
            $(this).parent('li').siblings('li').find('ul.show').removeClass('show');
            $(this).parent('li').siblings('li').find('a.dropdown').removeClass('dropdown');
            $(this).parent('li').siblings('li.current-menu-ancestor').find('ul').css('display', 'none');
        });
  
    /** Initialize Carousel **/
    $('.carousel-item:first-child, .carousel-indicators > li:first').addClass('active');
    var bannerCaption = $('header.header figcaption');
    bannerCaption.each(function () {
      $(this).parent('figure').addClass('showCaption');
    });
  
    if ($('.header-image > img').length > 0) {
      $('header.header').addClass('has-image');
    }
    var flag = false;
    $('figure.showCaption').bind('hover touchdown', function () {
      if (!flag) {
        flag = true;
        setTimeout(function () {
          flag = false;
        }, 200);
        $(this).addClass('hover');
        //e.preventDefault();
      }
      return false;
  
    });
  
    /*** wpcf7-form tweaks ***/
    $('.wpcf7-form').find('br').remove();

        //show send Box
        if ($(".wpcf7-response-output.wpcf7-mail-sent-ok").length > 0) {

          $(".wpcf7-response-output.wpcf7-mail-sent-ok").siblings().css('display', 'none');
  
          $(".wpcf7-response-output.wpcf7-mail-sent-ok").siblings('legend')
                  .text('Anmeldung versendet')
                  .css('display', 'block');
  
      }
         // Close wpcf7 alerts
          // add Icon
          //$('.wpcf7-response-output').append('<i class="fas fa-times-circle"></i>');
         $('.wpcf7-response-output').on('click', function(){
          $(this).fadeOut();
      });
  
    $('.lang-item').each(function () {
      $(this).children('a')
        .wrapInner('<span></span>')
        .append('<span class="lang-icon"></span>');
    });
    //window scroll funtion
    $(window).scroll(function () {
      if ($(window).scrollTop() > 500) {
        $('.scroll-to-top_cnt').fadeIn();
      } else {
        $('.scroll-to-top_cnt').fadeOut();
      }
    });
     //Click event to scroll to top
     $('.scroll-to-top').click(function () {
      scrollUp();
    });
  
    /** Pagination**/
    $('.page-numbers.next, .page-numbers.prev').wrapInner('<span></span>');
    $('.page-numbers.next').append('<i class="fas fa-arrow-circle-right"></i>');
    $('.page-numbers.prev').prepend('<i class="fas fa-arrow-circle-left"></i>');
  
    // set content images max-width
    $('main[role="main"] article p img').addClass('img-fluid');

    // avoid collapse when image floating
    
  });
  