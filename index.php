<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>トルもんランド</title>
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

  <link href="./assets/css/common.css" rel="stylesheet">
  <link href="./assets/css/reset.css" rel="stylesheet">
  <link href="./assets/css/pages/top.css" rel="stylesheet" media="all">

  <script src="./assets/js/jquery-3.4.1.min.js"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/pages/top.js"></script>

  <!-- slick -->
  <link rel="stylesheet" href="./assets/css/slick/slick.css">
  <link rel="stylesheet" href="./assets/css/slick/slick-theme.css">
  <script src="./assets/js/slick/slick.min.js"></script>


</head>

<body>
  <?php include(dirname(__FILE__).'/header.php'); ?>

  <main class="top-page">
    <section class="section-mv is-pc">
      <div class="container flex">
        <img src="assets/img/logo.svg" alt="" class="logo">
        <div class="slide">
          <img src="assets/img/top/mv-slide01.png" alt="" class="img">
          <img src="assets/img/top/mv-slide02.png" alt="" class="img">
          <img src="assets/img/top/mv-slide03.png" alt="" class="img">
        </div>
      </div>
    </section>

    <section class="section-mv is-sp">
      <div class="container">
      <div class="sp-slide">
          <img src="assets/img/top/mv-slidesp01.png" alt="" class="img">
          <img src="assets/img/top/mv-slidesp02.png" alt="" class="img">
          <img src="assets/img/top/mv-slidesp03.png" alt="" class="img">
        </div>
      </div>
    </section>

    <section class="section-content">
      <div class="container">
        <!-- pcのソートボタン  -->
        <ul class="tags flex is-pc">
          <li class="tag is-active" data-group="">すべて</li>
          <li class="tag" data-group="a">新着</li>
          <li class="tag" data-group="b">オススメ</li>
          <li class="tag" data-group="c">ぬいぐるみ</li>
          <li class="tag" data-group="d">フィギュア</li>
          <li class="tag" data-group="e">クッキング</li>
          <li class="tag" data-group="f">お菓子</li>
          <li class="tag" data-group="g">電子機器</li>
          <li class="tag double" data-group="h">トレもんランド限定</li>
        </ul>

        <!-- spのソートセレクト+メールアイコン -->
        <div class="info  is-sp">
          <div class="flex">
            <form action="" class="form">
              <select name="tags" id="">
                <option value="すべて">すべて<span class="amount">(999)</span></option>
                <option value="新着">新着<span class="amount">(999)</span></option>
                <option value="オススメ">オススメ<span class="amount">(999)</span></option>
                <option value="ぬいぐるみ">ぬいぐるみ<span class="amount">(999)</span></option>
                <option value="フィギュア">フィギュア<span class="amount">(999)</span></option>
                <option value="クッキング">クッキング<span class="amount">(999)</span></option>
                <option value="お菓子">お菓子<span class="amount">(999)</span></option>
                <option value="電子機器">電子機器<span class="amount">(999)</span></option>
                <option value="トルもんランド限定">トルもんランド限定<span class="amount">(999)</span></option>
              </select>
            </form>

            <div class="news">
              <a href="/mypage/" class="link">
                <img src="assets/img/top/mail.png" alt="メールアイコン" class="mail-icon">
                <img src="assets/img/top/notice.png" alt="！" class="notice-icon">
              </a>
            </div>
          </div>

        </div>

        <div class="contents">
          <p class="amount is-pc">カテゴリー：すべて(5672)</p>
          <div class="content recommend is-pc" data-group="a">
            <h2 class="title">注目台</h2>
            <ul class="machines  flex">
              <li class="machine">
                <a href="" class="link">
                  <p class="status playing">プレイ中</p>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <p class="status add">景品補充中</p>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <p class="status maintenance">メンテナンス中</p>
                  <div class="cover"></div>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/few.svg" alt="NEW" class="label few">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/recom.svg" alt="NEW" class="label recommend">
                </a>
              </li>
            </ul>
          </div>

          <!-- スマホ用注目台 -->
          <div class="content recommend is-sp" data-group="a">
            <h2 class="title">注目台</h2>
            <ul class="machines  flex">
              <li class="machine sp">
                <a href="" class="link">
                  <p class="status playing">プレイ中</p>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine">
                <a href="" class="link">
                  <p class="status add">景品補充中</p>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine sp">
                <a href="" class="link">
                  <p class="status maintenance">メンテナンス中</p>
                  <div class="cover"></div>
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine sp">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/new.svg" alt="NEW" class="label new">
                </a>
              </li>

              <li class="machine sp">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/few.svg" alt="NEW" class="label few">
                </a>
              </li>

              <li class="machine sp">
                <a href="" class="link">
                  <img src="assets/img/top/machine-thumbnail.png" alt="サムネイル" class="thumbnail">
                  <p class="title">【３回で交代】練習台</p>
                  <div class="point flex">
                    <img src="assets/img/point.svg" alt="ポイント" class="icon">
                    <p class="number">500</p>
                  </div>
                  <img src="assets/img/top/recom.svg" alt="NEW" class="label recommend">
                </a>
              </li>
            </ul>
          </div>

          <ul class="machines flex">
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
            <li class="content machine normal" data-group="b">
              <a href="" class="link">
                <img src="assets/img/top/machine-thumbnail-normal.png" alt="サムネイル" class="thumbnail">
                <p class="title">【トルもんランド】<br>トルもんぬいぐるみ</p>
                <div class="point flex">
                  <img src="assets/img/point.svg" alt="ポイント" class="icon">
                  <p class="number">2000</p>
                </div>
                <!-- <img src="assets/img/top/new.svg" alt="NEW" class="label"> -->
              </a>
            </li>
          </ul>
        </div>

        <div class="page-top-box is-pc">
        <div class="page-top is-pc" id="page-top-pc">
          <a href="#" class="link">
            <img src="assets/img/backtotop.png" alt="" class="img">
          </a>
        </div>

        </div>
        
        <div class="page-top-box  is-sp">
        <div class="page-top" id="page-top-sp">
          <a href="#" class="link">
           ▲トップへ戻る
          </a>
        </div>
        </div>
        <!-- <div class="search">
        <img src="assets/img/top/search.png" alt="" class="icon">
      </div> -->
      </div>
    </section>
  </main>
  <?php include(dirname(__FILE__).'/footer.php'); ?>

</body>

</html>