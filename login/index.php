<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ログイン | トルもんランド</title>
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
  <link href="../assets/css/pages/login.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/login.js"></script>

</head>

<body>
  <?php include(dirname(__FILE__).'/../header.php'); ?>
  <main class="login-page">

    <section class="section-content">
      <div class="container">
        <h1 class="title">ログイン</h1>
        <form action="" class="form">
          <div class="input-container">
            <div class="form-item login flex" for="login">
              <div class="left flex">
                <input id="login" class="radio-input" type="radio" name="radio" value="login">
                <p class="label">すでに会員の方</p>
              </div>
              <ul class="right">
                <li class="input-area flex">
                  <p class="label">メールアドレス：</p>
                  <input type="email" class="input email" name="email" value="" placeholder="メールアドレス">
                </li>
                <li class="input-area password flex">
                  <p class="label">パスワード：</p>
                  <input type="text" class="input password" name="email" value="">
                </li>
                <li class="error">
                  <p class="text">メールアドレスとパスワードの組み合わせが異なるようです</p>
                </li>
                <li class="forget">
                  <a href="/login/pw-reissue.php" class="link">パスワードを忘れた方はこちら</a>
                </li>
              </ul>
            </div>

            <div class="form-item signup flex" for="login">
              <div class="left flex">
                <input id="signup" class="radio-input" type="radio" name="radio" value="login">
                <p class="label">新規会員登録</p>
              </div>
              <ul class="right">
                <li class="input-area flex">
                  <p class="label">メールアドレス：</p>
                  <input type="email" class="input email" name="email" value="" placeholder="会員IDとなります">
                </li>
              </ul>
            </div>
          </div>

          <div class="button">
            <button class="link send" type="submit">
              ログイン
            </button>
          </div>
        </form>
      </div>
    </section>

  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>


</body>

</html>