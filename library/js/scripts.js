jQuery(function($) {
  //set columns
  $(".row.cols-50-50").children('div').addClass('col-lg-6');
  $(".row.cols-30-70").children('div:first-child()').addClass('col-lg-4').next('div').addClass('col-lg-8');
  $(".row.cols-70-30").children('div:first-child()').addClass('col-lg-8').next('div').addClass('col-lg-4');
  $(".row.cols-3x40").children('div').addClass('col-lg-4');
  $(".row.cols-4x30").children('div').addClass('col-lg-3');
  $(".row.cols-100").children('div').addClass('col-lg-12');

  // set bs navbar
  if($(window).width() > 991){
    console.log('larger than 992');
    mainNav = $('header .navbar');
    $('.navbar').css('display', 'block');
    mainNav.children('ul').addClass('navbar-nav justify-content-end').children('li').addClass('nav-item').children('a').addClass('nav-link');
    mainNav.find('.sub-menu').addClass('dropdown-menu').children('li').children('a').addClass('dropdown-item');
    mainNav.find('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');
    //$('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');

    $(".dropdown")
      .mouseover(function() {
        $(this).addClass('show').attr('aria-expanded', "true");
        $(this).find('.dropdown-menu').addClass('show');
      })
      .mouseout(function() {
        $(this).removeClass('show').attr('aria-expanded', "false");
        $(this).find('.dropdown-menu').removeClass('show');
      });
  } else {
      console.log('smaller than 992');
      offNav = $('#offMenu > ul ').addClass('nav flex-column');
      offNav.children('li').addClass('nav-item').children('a').addClass('nav-link');
      offNav.find('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');
      offNav.find('.sub-menu').addClass('dropdown-menu');
      offNav.children('.dropdown').each(function(){
        link = $(this).children('.dropdown-toggle').attr('href');
        linkText = $(this).children('.dropdown-toggle').text();
        $(this).children('.dropdown-menu').prepend('<li class="menu-item nav-item first-item"><a class="dropdown-item nav-link" href="' + link +'">' + linkText + '</a></li>');
        $(this).children('.dropdown-toggle').click(function (e) {
            e.preventDefault();
            $(this).css('opacity','.5');
            $(this).siblings('ul').toggleClass('show');
        });
      });
  }


  /*** Off canvas ***/
  $('.toggle-nav').on('touchstart click', function (e) {
      $('#offMenu').toggleClass('open');
      $(this).toggleClass('open');
      e.preventDefault();
  });
  if ($('.header-image > img').length > 0) {
      $('header.header').addClass('has-image');
  }

  /*** wpcf7-form tweaks ***/
  $('.wpcf7-form').find('br').remove();

  /*** language menu tweaks ***/
  $('.lang-item a').wrapInner('<span></span>');
});
