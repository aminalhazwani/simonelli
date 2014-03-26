$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('footer').fadeIn();
        } else {
            $('footer').fadeOut();
        }
    });

    $('footer').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > 90) {
            $('aside').addClass('fixed');
        }
        else {
            $('aside').removeClass('fixed');
        }
    });

});