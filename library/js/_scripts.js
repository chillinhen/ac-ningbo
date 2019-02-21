jQuery(function($) {







  /*** wpcf7-form tweaks ***/
  $('.wpcf7-form').find('br').remove();

  /*** language menu tweaks ***/
  //$('.lang-item-de > a').html('DE');
  //$('.lang-item-zh > a').html('文');

  $('#languages-menu').css('border','1px solid red');


  //window scroll function
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
});
