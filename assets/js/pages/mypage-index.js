//radioボタン 選択した値のみ表示
$(function () {
  $('[name="mail-magazine"]:radio').change(function () {
    if ($('[id=yes]').prop('checked')) {
      $('.radio-text-magazine').fadeOut();
      $('.yes').fadeIn();
    } else if ($('[id=no]').prop('checked')) {
      $('.radio-text-magazine').fadeOut();
      $('.no').fadeIn();
    }
  });
});
$(function () {
  $('[name="gender"]:radio').change(function () {
    if ($('[id=man]').prop('checked')) {
      $('.radio-text-gender').fadeOut();
      $('.man').fadeIn();
    } else if ($('[id=no]').prop('checked')) {
      $('.radio-text-gender').fadeOut();
      $('.woman').fadeIn();
    }
  });
}); //selectbox選択不可

$(function () {
  $("#status-select").prop('disabled', true);
  $('form').bind('submit', function () {
    $(this).find("#status-select").prop('disabled', false);
  });
});