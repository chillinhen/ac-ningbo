(function ($, root, undefined) {

    $(function () {
        checkImageSize();
        $(window).resize(checkImageSize);
        
        function checkImageSize() {
            $('.gallery-item a').each(function () {
                var gallery = $(this).parent().parent().parent('div');
                var galleryID = gallery.attr('id');
                $(this).attr('data-lightbox-gallery', galleryID);
            });
            $('.main-content .gallery-item a').each(function () {
                var imgHeight = $(this).height();
                $(this).parent().parent('figure').css('height', imgHeight);
            });
        }

        var navButton = $('[class*="item-has-children"]');
        navButton.each(function () {
            $(this).append('<span class="icon"> </span>');
            $(this).children('.icon').on('click', function () {
                $(this).toggleClass('open');
                $(this).siblings('ul').toggleClass('show');
                e.preventDefault();
            });

        });

        
        
        

        // style menu items
        $('nav [class*="item"]> a').wrapInner('<span></span>');
        /*** Language switch ***/
        $('.lang-item').each(function () {
            $(this).children('a').wrapInner('<span></span>');
        });
        /*** Off canvas ***/
        $('.toggle-nav').on('touchstart click', function (e) {
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
        
                /*** NIVO Lightbox ***/
        $('a').nivoLightbox();

        $('.gallery-item a').nivoLightbox({
            effect: 'fade', // The effect to use when showing the lightbox 
            theme: 'default', // The lightbox theme to use 
            keyboardNav: true, // Enable/Disable keyboard navigation (left/right/escape) 
//            onInit: function () {}, // Callback when lightbox has loaded 
//            beforeShowLightbox: function () {}, // Callback before the lightbox is shown 
//            afterShowLightbox: function (lightbox) {}, // Callback after the lightbox is shown 
//            beforeHideLightbox: function () {}, // Callback before the lightbox is hidden 
//            afterHideLightbox: function () {}, // Callback after the lightbox is hidden 
//            onPrev: function (element) {}, // Callback when the lightbox gallery goes to previous item 
//            onNext: function (element) {}, // Callback when the lightbox gallery goes to next item 
            errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded 
        });
       
        
        
    });

})(jQuery, this);
