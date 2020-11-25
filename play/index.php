<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プレイ画面| トルもんランド</title>
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
  <link href="../assets/css/pages/play.css" rel="stylesheet" media="all">
  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/play.js"></script>
</head>

<body><?php include(dirname(__FILE__).'/../header.php');?>
  <main class="play-page">
    <div class="container flex">
      <section class="section-content">
        <div class="container">
          <h1 class="machine-title">No.999　トルモンぬいぐるみ B のっかりトルモン</h1>
          <div class="live-area">
            <img src="../assets/img/play/screen.png" alt="" class="screen">
            <p class="time">残り時間<br><span class="remain-time">36</span>秒</p>
            <p class="viewers">閲覧人数<br><span class="number">1</span>人
            </p>
            <img src="../assets/img/play/icon_cheer.svg" alt="" class="cheer">
          </div>
          <form action="" class="comment flex">
            <div class="select-box">
              <select class="select" id="comment-selectt" name="comment" value="">
                <option value="">コメント選択</option>
                <option value="">ダミー</option>
                <option value="">ダミー02</option>
                <option value="">ダミー03</option>
              </select>
            </div>
            <p class="text">獲得判定してください</p>
            <button class="button" type="submit">
              送信
            </button>
          </form>
        </div>
      </section>

      <section class="sidebar">
        <div class="container">
          <button class="point-button">
            <a href="/mypage/point.php" class="link">
              <img src="../assets/img/point_buy.svg" alt="ポイントを購入" class="img">
            </a>
          </button>
          <div class="reservation flex">
            <p class="label">現在の予約</p>
            <p class="data"><span class="number">0</span>番目/<span class="number">0</span>人中</p>
          </div>
          <div class="fee flex">
            <p class="label">1PLAY</p>
            <p class="data">120</p>
            <img src="../assets/img/point.svg" alt="" class="icon">
          </div>
          <div class="balance flex">
            <p class="label">所持ポイント</p>
            <p class="data">99,640</p>
            <img src="../assets/img/point.svg" alt="" class="icon">
          </div>
          <button class="reservation-button">
            <img src="../assets/img/play/button_gamestart_gray.svg" alt="プレイ予約" class="img">
            <img src="../assets/img/play/button_gamestart_pink.svg" alt="プレイ予約" class="img">
          </button>
          <button class="handle">
            <img src="../assets/img/play/button_back.svg" alt="" class="img">
            <!-- ボタン各種 -->
            <!-- <img src="../assets/img/play/button_backoff.svg" alt="" class="img">
            <img src="../assets/img/play/button_backon.svg" alt="" class="img">
            <img src="../assets/img/play/button_land.svg" alt="" class="img">
            <img src="../assets/img/play/button_landoff.svg" alt="" class="img">
            <img src="../assets/img/play/button_landon.svg" alt="" class="img"> -->
          </button>

          <ul class="position-buttons flex">
            <li class="button  front">
              <img src="../assets/img/play/icon_camera_front.svg" alt="前" class="icon front">
            </li>
            <li class="button side active">
              <img src="../assets/img/play/icon_camera_side.svg" alt="横" class="icon side">
            </li>
          </ul>

          <ul class="sound-buttons flex">
            <li class="button sound-on">
              <img src="../assets/img/play/icon_soundon.svg" alt="サウンドon" class="icon sound-on">
            </li>
            <li class="button sound-off active">
              <img src="../assets/img/play/icon_sound_off.svg" alt="サウンドoff" class="icon sound-off">
            </li>
          </ul>

          <button class="help-button contact">
            お問い合わせ
          </button>

          <button class="help-button call">
            呼び出し
          </button>
        </div>
      </section>
    </div>

    <section class="section-item">
      <div class="container">
        <ul class="items flex">
          <li class="item">
            <a href="" class="modal-item-link">
              <img src="../assets/img/top/machine-thumbnail.png" alt="" class="thumbnail">
              <p class="title">トルモンぬいぐるみ B のっかりトルモン</p>
            </a>
          </li>
          <li class="item">
            <a href="" class="modal-item-link">
              <img src="../assets/img/top/machine-thumbnail.png" alt="" class="thumbnail">
              <p class="title">トルモンぬいぐるみ B のっかりトルモン</p>
            </a>
          </li>
          <li class="item">
            <a href="" class="modal-item-link">
              <img src="../assets/img/top/machine-thumbnail.png" alt="" class="thumbnail">
              <p class="title">トルモンぬいぐるみ B のっかりトルモン</p>
            </a>
          </li>
          <li class="item">
            <a href="" class="modal-item-link">
              <img src="../assets/img/top/machine-thumbnail.png" alt="" class="thumbnail">
              <p class="title">トルモンぬいぐるみ B のっかりトルモン</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- 景品モーダル   -->
    <div class="item-modal">
      <div class="bg close"></div>
      <div class="content">
        <img src="../assets/img/top/machine-thumbnail.png" alt="" class="thumbnail">
        <p class="title">トルモンぬいぐるみ B のっかりトルモン</p>
        <a class="close" href=""><img src="../assets/img/play/icon_close.svg" alt="" class="icon"></a>
      </div>
    </div>

    <!-- 続けてプレイ モーダル  -->
    <div class="replay-modal">
      <div class="bg close"></div>
      <div class="content">
        <p class="text">続けてプレイしますか？</p>
        <ul class="buttons flex">
          <li class="button no">
            <a href="/" class="no close">
              やめる
            </a>
          </li>
          <li class="button">
            <a href="" class="yes close">
              続ける
            </a>
          </li>
        </ul>
      </div>
    </div>

     <!-- あなたの番になりました モーダル  -->
     <div class="myterm-modal">
      <div class="bg close"></div>
      <div class="content">
        <p class="text">あなたの番になりました</p>
        <a class="close" href="">OK</a>
      </div>
    </div>

  </main>
  <?php include(dirname(__FILE__).'/../footer.php');?>
</body>

</html>