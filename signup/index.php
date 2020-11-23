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
  <link href="../assets/css/pages/signup.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include(dirname(__FILE__).'../../header.php'); ?>
  <main class="signup-page">

    <section class="section-content">
      <div class="container">
        <h1 class="title">新規会員登録</h1>

        <form action="" class="form">
          <div class="input-container">
            <ul class="input-list">
              <li class="input-area flex">
                <p class="label">ニックネーム</p>
                <input type="text" class="input name" name="name" value="">
                <p class="notice">(10文字まで)</p>
              </li>
              <li class="error">
                  <p class="text">10文字以内で入力してください</p>
                </li>
              <li class="input-area flex">
                <p class="label">パスワード</p>
                <input type="text" class="input password" name="password" value="">
                <p class="notice">(半角英数字10桁まで)</p>
              </li>
              <li class="error">
                  <p class="text">半角英数字で入力してください</p>
                </li>
              <li class="input-area flex">
                <p class="label">パスワード(確認用)</p>
                <input type="text" class="input password" name="password-confirm" value="">
              </li>
              <li class="error">
                  <p class="text">入力されたパスワードが一致しません</p>
                </li>
            </ul>
            <div class="privacy-check flex">
              <input type="checkbox" class="checkbox" name="privacy-agreement" value="">
              <p class="text"><a href="" class="link">利用䂓約</a>と<a href="/privacy/" class="link">プライバシーポリシー</a>に同意する</p>
            </div>
          </div>

          <button class="button" type="submit" onSubmit="setcookie()">
            <a href="signup-confirm.php" class="link">
              次へ
            </a>
          </button>
        </form>
      </div>
    </section>


  </main>
  <?php include(dirname(__FILE__).'../../footer.php'); ?>


</body>

</html>