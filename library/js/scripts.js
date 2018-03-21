(function ($, root, undefined) {

    $(function () {

        /*** Language switch ***/
        $('.lang-item').each(function () {
            $(this).children('a').wrapInner('<span></span>');
        });

    });

})(jQuery, this);
