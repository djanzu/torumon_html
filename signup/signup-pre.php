<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>新規会員登録 | トルもんランド</title>
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
  <link href="../assets/css/pages/signup-pre.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include(dirname(__FILE__).'../../header.php'); ?>
  <main class="signup-pre-page">

  <section class="section-mv is-xs">
      <div class="container">
        <img src="../assets/img/login/img_mv_sp.png" alt="トルもんランド ログイン" class="img">
      </div>
    </section>

  <section class="section-content">
      <div class="container">
          <h1 class="title is-tab">新規会員登録</h1>
          <h1 class="title is-xs">新規会員登録メール送信完了</h1>
          <p class="text"><span class="red is-xs">※現段階では登録は完了しておりません。<br><br></span>新規会員登録用URLをご指定のメールアドレスに送信しました。<br>引き続きメール内のURLからご登録の手続きをお願いします。<br>メールが見当たらない場合は迷惑メールフォルダに振り分けられている場合がございますので、ご確認ください。</p>
          <button class="button is-xs">再送信</button>
          <p class="back is-xs"><a href="/" class="link">Topへ戻る</a></p>
      </div>
  </section>


  </main>
  <?php include(dirname(__FILE__).'../../footer.php'); ?>


</body>

</html>