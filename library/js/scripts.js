(function ($, root, undefined) {

    $(function () {
        // Nav Button
        var navButton = $('.menu-item > a');
        var tapped = false;
        //navButton.addClass('foo');
        navButton.on("touchstart", function (e) {
            if (!tapped) { //if tap is not set, set up single tap
                tapped = setTimeout(function () {
                    e.preventDefault();
                    //insert things you want to do when single tapped
                }, 300);   //wait 300ms then run single click code
                $(this).addClass('dropdown');
                $(this).siblings('ul').toggleClass('show');
            } else {    //tapped within 300ms of last tap. double tap
                clearTimeout(tapped); //stop single tap callback
                window.location.href = $(this).attr('href');
                //insert things you want to do when double tapped
            }
            e.preventDefault()
        });
        /*** Language switch ***/
        $('.lang-item').each(function () {
            $(this).children('a').wrapInner('<span></span>');
        });
        /*** Off canvas ***/
        $('.toggle-nav').click(function (e) {
            $('#offMenu').toggleClass('open');
            $(this).toggleClass('open');
            e.preventDefault();
        });
        if ($("#offMenu  ul").length > 0) {
            $('.toggle-nav').css('display', 'block');
        }
        if ($('.header-image > img').length > 0) {
            $('header.header').addClass('has-image');
        }
        $('aside').prev('p').remove();
        //$('aside .gallery').children('br').remove();
    });

})(jQuery, this);
