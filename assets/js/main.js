//sp-menu
jQuery(function ($) {
  $('.bars-sp').on('click', function () {
    $('.bar').toggleClass('active');
    $('.sp-menu').toggleClass('active');
  });
  $('.sp-menu > .container > .pages-index > .page-index a').on('click', function () {
    $('.bar').toggleClass('active');
    $('.sp-menu').toggleClass('active');
  });
}); //menu open時の背景スクロール禁止

jQuery(function ($) {
  var scrollPos;
  $('.bars-sp').on('click', function () {
    if ($('body').hasClass('fixed')) {
      $('body').removeClass('fixed').css('top', 0 + 'px');
      window.scrollTo(0, scrollPos);
    } else {
      scrollPos = $(window).scrollTop();
      $('body').addClass('fixed').css('top', -scrollPos + 'px');
    }
  });
}); //back to top

$(function () {
  var pagetop = $('#page-top');
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
});