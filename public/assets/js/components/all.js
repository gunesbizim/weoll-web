/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!******************************************!*\
  !*** ./resources/js/components/index.js ***!
  \******************************************/
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
    }); // $($('.container').get(1)).attr('id', 'nextSection')
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
  });
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
      console.log('here');
      e.preventDefault();

      if ($(this).hasClass('enterprise-btn')) {
        $('.package-button.btntwo').click();
      } else {
        $('.package-button.btnone').click();
      }
    });
  }
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*********************************************!*\
  !*** ./resources/js/components/packages.js ***!
  \*********************************************/
$(document).ready(function () {
  $('.packages-button').on('click', function () {
    if ($(this).attr('data-id') == 1) {
      console.log('1');
    } else {
      console.log('2');
    }
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!****************************************!*\
  !*** ./resources/js/components/tab.js ***!
  \****************************************/
$(document).ready(function () {
  $('.tab-title').on('click', function () {
    if ($(this).hasClass('selected')) {
      return;
    } else {
      $('.tab-title.selected').removeClass('selected');
      $('.tab-content.selected').removeClass('selected');
      $(this).addClass('selected');
      $(this).scroll();
      var contId = $(this).data('id');
      $('.tab-content[data-id=' + contId + ']').addClass('selected');
    }
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************************!*\
  !*** ./resources/js/components/tabs-2.js ***!
  \*******************************************/
$(document).ready(function () {
  $('.tab-cont-container').on('click', function () {
    if ($(this).hasClass('selected')) {
      return;
    } else {
      var contId = $(this).data('id');
      console.log(contId);
      $('img.tabs-two-img.selected').removeClass('selected');
      $('img.tabs-two-img[data-id=' + contId + ']').addClass('selected');
      $('.tab-cont-container.selected').removeClass('selected');
      $('.tab-cont-container[data-id=' + contId + ']').addClass('selected');
    }
  });
});
})();

/******/ })()
;