<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お知らせ | トルもんランド</title>
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
  <link href="../assets/css/pages/news-index.css" rel="stylesheet" media="all">
  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/news-index.js"></script>
</head>

<body><?php include(dirname(__FILE__).'/../header.php');?>
  <main class="news-index-page">
    <section class="section-content">
      <div class="container">
        <h1 class="title is-tab">お知らせ</h1>
        <h1 class="title is-xs">
          <a href="/menu/" class="link">
            <img src="../assets/img/icon_arrow.svg" alt="戻る" class="icon">
            お知らせ一覧</a>
        </h1>
        <ul class="tags flex is-pc">
          <li class="tag is-active" data-group="">すべて</li>
          <li class="tag" data-group="a">景品情報</li>
          <li class="tag" data-group="b">重要なお知らせ</li>
        </ul>

        <ul class="news-list">
          <li class="news">
            <a href="/news/detail.php" class="link">
              <p class="text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
              <div class="info flex">
                <p class="new">NEW!</p>
                <p class="tag item">景品情報</p>
                <p class="date">2020/00/00 23:59</p>
              </div>
            </a>
          </li>
          <li class="news">
            <a href="/news/detail.php" class="link">
              <p class="text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
              <div class="info flex">
                <p class="tag important">重要なお知らせ</p>
                <p class="date">2020/00/00 23:59</p>
              </div>
            </a>
          </li>
          <li class="news">
            <a href="/news/detail.php" class="link">
              <p class="text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
              <div class="info flex">
                <p class="tag item">景品情報</p>
                <p class="date">2020/00/00 23:59</p>
              </div>
            </a>
          </li>
          <li class="news">
            <a href="/news/detail.php" class="link">
              <p class="text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
              <div class="info flex">
                <p class="tag item">景品情報</p>
                <p class="date">2020/00/00 23:59</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>