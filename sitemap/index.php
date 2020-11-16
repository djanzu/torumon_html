<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>サイトマップ | トルもんランド</title>
  <meta name="title" content="トルモンランド">
  <meta name="description" content="">
  <meta name=" keywords" content="">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="トルもんランド" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="./assets/imgs/og-image.jpg" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="トルもんランド" />
  <link rel="shortcut icon" href="./favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png/">

  <link href="../assets/css/common.css" rel="stylesheet">
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/pages/sitemap.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>


</head>

<body>
  <?php include(dirname(__FILE__).'../../header.php'); ?>
  <main class="sitemap-page">
    <section class="section-content">
      <div class="container">
        <h1 class="title">サイトマップ</h1>
        <div class="flex">
          <ul class="pages">
            <li class="page">
              <a href="/" class="link">トップページ</a>
            </li>
            <li class="page">
              <a href="/signup/" class="link">会員登録</a>
            </li>
            <li class="page">
              <a href="/mypage/shipping.php" class="link">景品一覧</a>
            </li>
            <li class="page">
              <a href="/contact/" class="link">お問い合わせ</a>
            </li>
            <li class="page">
              <a href="/privacy" class="link">利用規約</a>
            </li>
            <li class="page">
              <a href="/privacy#tab2" class="link">特定商法に関する表示</a>
            </li>
            <li class="page">
              <a href="/sitemap/" class="link">サイトマップ</a>
            </li>
          </ul>

          <ul class="pages">
            <li class="page">
              <a href="/guide/" class="link">初めての方へ</a>
            </li>
            <li class="page indent">
              <a href="/guide#tab01" class="link">・トルもんランドとは</a>
            </li>
            <li class="page indent">
              <a href="/guide#tab02" class="link">・ポイントについて</a>
            </li>
            <li class="page indent">
              <a href="/guide#tab03" class="link">・操作方法</a>
            </li>
            <li class="page indent">
              <a href="/guide#tab04" class="link">・景品配送について</a>
            </li>
            <li class="page indent">
              <a href="/guide#tab05" class="link">・推奨スペック</a>
            </li>
          </ul>

          <ul class="pages">
            <li class="page">
              <a href="/mypage/" class="link">マイページ</a>
            </li>
            <li class="page indent">
              <a href="/login/" class="link">・ログイン</a>
            </li>
            <li class="page indent">
              <a href="/mypage/" class="link">・マイページトップ</a>
            </li>
            <li class="page indent">
              <a href="/mypage/myitem.php" class="link">・獲得した景品</a>
            </li>
            <li class="page indent">
              <a href="/mypage/point.php" class="link">・ポイント購入</a>
            </li>
            <li class="page indent">
              <a href="/mypage/edit.php" class="link">・お客様情報変更</a>
            </li>
            <li class="page indent">
              <a href="/logout/" class="link">・ログアウト</a>
            </li>
          </ul>
        </div>


      </div>
    </section>


  </main>
  <?php include(dirname(__FILE__).'../../footer.php'); ?>
</body>

</html>