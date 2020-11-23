<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>退会手続き | トルもんランド</title>
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
  <link href="../assets/css/pages/withdrawal.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include ( dirname(__FILE__) . '/../header.php' ); ?>

  <main class="withdrawal-page">
    <div class="container  flex">
      <section class="sidebar">
        <div class="container">
          <ul class="pages">
            <li class="page">
              <a href="/mypage/index.php" class="link flex">
                <img src="../assets/img/mypage/icon_top.svg" alt="" class="icon">
                <p class="text">マイページトップ</p>
              </a>
            </li>

            <li class="page">
              <a href="/maypage/password.php" class="link flex">
                <img src="../assets/img/mypage/icon_password.svg" alt="" class="icon">
                <p class="text">パスワード変更</p>
              </a>
            </li>

            <li class="page">
              <a href="mypage/myitem.php" class="link flex">
                <img src="../assets/img/mypage/icon_myitem.svg" alt="" class="icon">
                <p class="text">獲得した景品&景品発送</p>
              </a>
            </li>

            <li class="page">
              <a href="/mypage/code.php" class="link flex">
                <img src="../assets/img/mypage/icon_code.svg" alt="" class="icon">
                <p class="text">各種コード入力</p>
              </a>
            </li>

            <li class="page">
              <a href="/mypage/withdrawal.php" class="link flex active">
                <img src="../assets/img/mypage/icon_withdrawal.svg" alt="" class="icon">
                <p class="text">退会手続き</p>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="section-content">
        <div class="container">
          <h1 class="title">退会手続き</h1>
          <p class="text">
            退会すると直ちに所有ポイントと個人情報が削除され、発送待ちの景品の発送ができなくなります。運営局にて退会処理を行
            いますので、「メールアドレス、お名前、ご住所、電話番号」を添えてお問い合わせからご連絡ください。確認が取れ次第退
            会処理を行います。
          </p>
          <div class="button">
            <a href="/mypage/myitem.php" class="link">
            <img src="../assets/img/mypage/button_myitem.svg" alt="商品の発送状況を確認する" class="img">
          </a>
          </div>
          <div class="notice">※退会された後は、いかなる理由があっても復活はできません。</div>

        </div>

      </section>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>