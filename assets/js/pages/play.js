$(function () {
  $('.modal-item-link').on('click', function () {
    $('.item-modal').fadeIn();
    return false;
  });
  $('.item-modal > .content> .close').on('click', function () {
    $('.item-modal').fadeOut();
    return false;
  });
});
$(function () {
  $('.replay-modal > .content > .buttons > .button > .close').on('click', function () {
    $('.replay-modal').fadeOut();
    return false;
  });
});
$(function () {
  $('.myterm-modal > .content> .close').on('click', function () {
    $('.myterm-modal').fadeOut();
    return false;
  });
});