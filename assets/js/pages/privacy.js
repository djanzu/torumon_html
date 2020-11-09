$(function () {
  //クリックしたときのファンクションをまとめて指定
  $('ul.tab_area li').click(function () {
    //.index()を使いクリックされたタブが何番目かを調べ、
    //		indexという変数に代入します。
    var index = $('ul.tab_area li').index(this); //コンテンツを一度すべて非表示にし、

    $('.content_area').css('display', 'none'); //クリックされたタブと同じ順番のコンテンツを表示します。

    $('.content_area').eq(index).fadeIn(); //タブについているクラスselectを消し、

    $('.tab_area li').removeClass('select'); //クリックされたタブのみにクラスselectをつけます。

    $(this).addClass('select');
  });
}); //ダイレクトリンク

$(function () {
  //location.hashで#以下を取得 変数hashに格納
  var hash = location.hash; //hashの中に#tab～が存在するか調べる。

  hash = (hash.match(/^#tab\d+$/) || [])[0]; //hashに要素が存在する場合、hashで取得した文字列（#tab2,#tab3等）から#より後を取得(tab2,tab3)	

  if ($(hash).length) {
    var tabname = hash.slice(1);
  } else {
    // 要素が存在しなければtabnameにtab1を代入する
    var tabname = "tab1";
  } //コンテンツを一度すべて非表示にし、


  $('.content_area').css('display', 'none'); //一度タブについているクラスselectを消し、

  $('.tab_area li').removeClass('select');
  var tabno = $('ul.tab_area li#' + tabname).index(); //クリックされたタブと同じ順番のコンテンツを表示します。

  $('.content_area').eq(tabno).fadeIn(); //クリックされたタブのみにクラスselectをつけます。

  $('ul.tab_area li').eq(tabno).addClass('select');
});