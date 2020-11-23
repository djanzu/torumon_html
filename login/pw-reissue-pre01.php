<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>パスワード再発行 | トルもんランド</title>
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
  <link href="../assets/css/pages/pw-reissue-pre01.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include(dirname(__FILE__).'/../header.php'); ?>
  <main class="pw-reissue-pre01-page">

    <section class="section-content">
      <div class="container">
        <h1 class="title">パスワード再発行</h1>

        <form action="" class="form">
          <div class="input-container">
            <p class="text">パスワード再発行のメールをお送りします。<br class="is-pc">
              メールアドレスを入力してください。</p>
            <div class="input-area flex">
              <p class="label">メールアドレス：</p>
              <input type="email" class="input" name="email" value="">

            </div>
            <p class="notice">※メールが届かない場合は、迷惑メールフィルタを解除してください。<br>
              ※メールアドレスもお忘れの方はお問い合わせからご登録のお名前と<br class="is-pc">電話番号を添えてお問い合わせください。</p>
          </div>

          <div class="button">
            <button class="link send" type="submit">
              送信
            </button>
          </div>
        </form>

      </div>
    </section>


  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>


</body>

</html>