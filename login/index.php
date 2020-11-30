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

    <section class="section-mv is-xs">
      <div class="container">
        <img src="../assets/img/login/img_mv_sp.png" alt="トルもんランド ログイン" class="img">
      </div>
    </section>

    <section class="section-content">
      <div class="container">
        <h1 class="title is-tab">ログイン</h1>
        <p class="notice is-xs"><a href="/privacy/index.php#tab03" class="link">利用規約</a>及び<a href="/privacy"
            class="link">プライバシーポリシー</a>に同意して始める</p>
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
                <li class="forget is-tab">
                  <a href="/login/pw-reissue.php" class="link">パスワードを忘れた方はこちら</a>
                </li>
              </ul>
            </div>

            <!-- スマホ用ボタン -->
            <div class="button is-xs">
              <button class="link send" type="submit">
                ログイン
              </button>
            </div>
              <!-- スマホ用パスワード再発行 -->
            <p class="forget is-xs">
                <a href="/login/pw-reissue.php" class="link">パスワードを忘れた方はこちら</a>
              </p>

            <div class="form-item signup flex" for="login">
              <div class="left flex">
                <input id="signup" class="radio-input" type="radio" name="radio" value="login">
                <p class="label">新規会員登録</p>
              </div>
              <ul class="right">
                <li class="input-area flex">
                  <p class="label">メールアドレス：</p>
                  <input type="email" class="input email is-tab" name="email" value="" placeholder="会員IDとなります">
                  <input type="email" class="input email is-xs" name="email" value="" placeholder="メールアドレス/会員ID">
                </li>
              </ul>
            </div>
          </div>

          <div class="button is-tab">
            <button class="link send" type="submit">
              ログイン
            </button>
          </div>

             <!-- スマホ用ボタン -->
          <div class="button is-xs">
            <button class="link send" type="submit">
              新規登録
            </button>
          </div>
        </form>
      </div>
    </section>

  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>


</body>

</html>