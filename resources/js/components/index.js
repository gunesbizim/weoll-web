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
        // $($('.container').get(1)).attr('id', 'nextSection')
    }
    $('.nav-link a').on('click', function (e) {
        if ($(this).attr('href') == "  ") {
            e.preventDefault();
        }
    });

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
    $('.nav-link.fa-angle-down').on('click', function () {
        if ($(this).hasClass('active')) {
            $('.navigator').focus();
            $(this).removeClass('active');
        } else {
            $.each($('.nav-link.fa-angle-down'), function (key, value) {
                $(this).removeClass('active');

            });
            $(this).addClass('active');

        }
    });

    if ($(window).width() <= 992) {


        $('.package-button').on('click', function () {
            if ($(this).hasClass('selected')) {
                return;
            } else {
                $('.package-button').removeClass('selected');
                $(this).addClass('selected');
                if ($(this).hasClass('btnone')) {
                    $('.first-btn').html('Satın Al');
                    $('.second-btn').html('Enterprise Paketi İncele');
                    $('.second-btn').addClass('enterprise-btn');
                    $('.second-btn').removeClass('business-btn');
                } else {
                    $('.first-btn').html('Teklif Al');
                    $('.second-btn').html('Business Paketi İncele');
                    $('.second-btn').addClass('business-btn');
                    $('.second-btn').removeClass('enterprise-btn');
                }
            }
            if ($(this).attr('data-id') == 1) {
                if ($('.pone').hasClass('active')) {
                    return;
                } else {
                    $('.pone').addClass('active');
                    $('.ptwo').removeClass('active');
                }
            } else {
                if ($('.ptwo').hasClass('active')) {
                    return;
                } else {
                    $('.ptwo').addClass('active');
                    $('.pone').removeClass('active');
                }
            }

        });
        $('.package-cta.second-btn').on('click', function (e) {
            e.preventDefault();
            if ($(this).hasClass('enterprise-btn')) {
                $('.package-button.btntwo').click();
            } else {
                $('.package-button.btnone').click();
            }
        })
        $('.package-cta.first-btn').on('click', function (e) {

            if ($('.package-button.btntwo').hasClass('selected')) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#footer-contact").offset().top
                }, 500);
            } else {

            }

        });

    }

});
