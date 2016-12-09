//header scrolling

jQuery(document).ready(function($) {

    $body = $('body');

    if ($body.hasClass('home') || $body.hasClass('.page-template-about') || $body.hasClass('.single-adventure')) {

        $(window).on('scroll', function() {

            if ($(window).scrollTop() >= $(window).height()) {
                $('.site-header').addClass('transparent-header');
            } else {
                $('.site-header').removeClass('transparent-header');
            }
        });
    }
});
