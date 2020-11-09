$(function () {
  $('.question .text').click(function () {
    $(this).next('ul').slideToggle('fast');
    $(this, '.question .text').toggleClass('active');
  });
});