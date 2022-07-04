$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            if ($('header').hasClass('is-sticky')) {
                return;
            } else {
                $('header').addClass('is-sticky');
            }
        } else {
            $('header').removeClass('is-sticky');
        }
    });
});
