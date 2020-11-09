var searchItem = '.tag'; // 絞り込む項目を選択するエリア

var listItem = '.content'; // 絞り込み対象のアイテム

var hideClass = 'is-hide'; // 絞り込み対象外の場合に付与されるclass名

var activeClass = 'is-active'; // 選択中のグループに付与されるclass名

$(function () {
  // 絞り込みを変更した時
  $(searchItem).on('click', function () {
    $(searchItem).removeClass(activeClass);
    var group = $(this).addClass(activeClass).data('group');
    search_filter(group);
  });
});
/**
 * リストの絞り込みを行う
 * @param {String} group data属性の値
 */

function search_filter(group) {
  // 非表示状態を解除
  $(listItem).removeClass(hideClass); // 値が空の場合はすべて表示

  if (group === '') {
    return;
  } // リスト内の各アイテムをチェック


  for (var i = 0; i < $(listItem).length; i++) {
    // アイテムに設定している項目を取得
    var itemData = $(listItem).eq(i).data('group'); // 絞り込み対象かどうかを調べる

    if (itemData !== group) {
      $(listItem).eq(i).addClass(hideClass);
    }
  }
} //mv slider


$(function () {
  $('.slide').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 300,
    prevArrow: '<img src="./assets/img/top/prev.svg" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="./assets/img/top/next.svg" class="slide-arrow next-arrow">'
  });
});