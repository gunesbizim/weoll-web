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