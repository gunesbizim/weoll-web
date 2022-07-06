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

    if ($(window).width() <= 992) {
        $('.nav-link a').each(function (index) {
            if ($(this).attr('href') == "  ") {
                $(this).parent().addClass('fa-solid');
                $(this).parent().addClass('fa-angle-down');
            }
        });
        $($('.container').get(1)).attr('id', 'nextSection')
    }

    $('.menu-toggle').on('click', function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('ul.navigator').removeClass('active');
            $('.contact-icons').removeClass('active');
        } else {
            $(this).addClass('active');
            $('ul.navigator').addClass('active');
            $('.contact-icons').addClass('active');

        }
    })

    $('.nav-link').on('click', function () {
        $(this).focus();
    });
});
