$(function () {
  $("#time-select").prop('disabled', true);
  $('form').bind('submit', function () {
    $(this).find("#status-select").prop('disabled', false);
  });
});