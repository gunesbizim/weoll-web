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
    $('.nav-link.fa-angle-down').on('click',function(){
        if ($(this).hasClass('active')) {
            $('.navigator').focus();
            $(this).removeClass('active');
        }else{
            $(this).addClass('active')
        }
    });

    if ($(window).width() <= 992) {


        $('.package-button').on('click', function () {
            if ($(this).hasClass('selected')) {
                return;
            } else {
                $('.package-button').removeClass('selected');
                $(this).addClass('selected');
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
    }


});
