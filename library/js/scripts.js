jQuery(function($) {
  // set Tooltip Title
  var btnTooltip = $(".btn-tooltip");
  btnTooltip.each(function(){
      var tooltip = $(this).siblings(".tooltip-cnt").html();
      $(this)
      .attr('data-toggle', 'tooltip')
      .attr('data-placement', 'top')
      .attr('title', tooltip);

  });
  //Initialize BS Tooltips
  $('[data-toggle="tooltip"]').tooltip();


  //set columns
  $(".row.cols-50-50").children('div').addClass('col-lg-6');
  $(".row.cols-30-70").children('div:first-child()').addClass('col-lg-4').next('div').addClass('col-lg-8');
  $(".row.cols-70-30").children('div:first-child()').addClass('col-lg-8').next('div').addClass('col-lg-4');
  $(".row.cols-3x40").children('div').addClass('col-lg-4');
  $(".row.cols-4x30").children('div').addClass('col-lg-3');
  $(".row.cols-100").children('div').addClass('col-lg-12');


  // set bs navbar
  if($(window).width() > 991){
    //console.log('larger than 992');
    mainNav = $('header .navbar');
    $('.navbar').css('display', 'block');
    mainNav.children('ul').addClass('navbar-nav justify-content-end level-1').children('li').addClass('nav-item').children('a').addClass('nav-link');
    mainNav.find('.sub-menu').addClass('dropdown-menu').children('li').children('a').addClass('dropdown-item');
    mainNav.find('.menu-item-has-children').addClass('dropdown').children('a').addClass('dropdown-toggle');
    mainNav.children('.level-1').children('.nav-item').children('.sub-menu').addClass('level-2');
    mainNav.find('.level-2').children('.menu-item').children('.sub-menu').addClass('level-3');

    $(".dropdown")
      .mouseover(function() {
        //alert('show');
        $(this).addClass('show').attr('aria-expanded', "true");
        //$(this).find('.dropdown-menu').addClass('show');
      })
      .mouseout(function() {
        //alert('hide');
        $(this).removeClass('show').attr('aria-expanded', "false");
        //$(this).find('.dropdown-menu').removeClass('show');
      });
  } else {
      //console.log('smaller than 992');
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

  /** Carousel Gallery **/
  $('.carousel-item:first, .carousel-indicators > li:first').addClass('active');
  var bannerCaption = $('header.header figcaption');
  bannerCaption.each(function(){
      $(this).parent('figure').addClass('showCaption');
  });

   if ($('.header-image > img').length > 0) {
       $('header.header').addClass('has-image');
   }
var flag = false;
$('figure.showCaption').bind('hover touchdown', function(){
  if (!flag) {
    flag = true;
    setTimeout(function(){ flag = false; }, 200);
    $(this).addClass('hover');
    //e.preventDefault();
  }
  return false;

});

   /*** wpcf7-form tweaks ***/
   $('.wpcf7-form').find('br').remove();

   $('.lang-item').each(function(){
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
   $('.scroll-to-top_cnt').click(function () {
       $('html, body').animate({scrollTop: 0}, 800);
       return false;
   });

   /** Pagination**/
   $('.page-numbers.next, .page-numbers.prev').wrapInner('<span></span>');
   $('.page-numbers.next').append('<i class="fas fa-arrow-circle-right"></i>');
   $('.page-numbers.prev').prepend('<i class="fas fa-arrow-circle-left"></i>');

   // set content images max-width
   $('main[role="main"] article p img').addClass('img-fluid');
});
