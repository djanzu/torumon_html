<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>パスワード変更 | トルもんランド</title>
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
  <link href="../assets/css/pages/mypage-password.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include ( dirname(__FILE__) . '/../header.php' ); ?>

  <main class="password-page">
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
              <a href="/maypage/password.php" class="link flex active">
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
              <a href="/mypage/withdrawal.php" class="link flex">
                <img src="../assets/img/mypage/icon_withdrawal.svg" alt="" class="icon">
                <p class="text">退会手続き</p>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="section-content">
        <div class="container">
          <h1 class="title">パスワード変更</h1>
          <p class="text">
            <span class="red">※</span>印は必須項目
          </p>
          <form action="" class="form">
            <table class="table">
              <tr class="cell">
                <th class="label">現在のパスワード<span class="red">※</span></th>
                <td class="data">
                  <input class="input" type="text" name="code" value="">
                  <p class="error">現在のパスワードが間違っています</p>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">新しいパスワード<span class="red">※</span></th>
                <td class="data">
                  <input class="input" type="text" name="code" value="">
                  <p class="error">半角英数字で入力してください</p>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">新しいパスワード(再入力)<span class="red">※</span></th>
                <td class="data">
                  <input class="input" type="text" name="code" value="">
                  <p class="error">新しいパスワードが一致しません</p>
                </td>
              </tr>
            </table>

            <div class="button flex">
              <button class="link cancel" type="button">
                <a href="index.php">
                  キャンセル
                </a>
              </button>
              <button class="link send" type="submit">
                変更する
              </button>
            </div>
          </form>
        </div>

      </section>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>