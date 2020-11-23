<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>景品発送| トルもんランド</title>
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
  <link href="../assets/css/pages/myitem-step02.css" rel="stylesheet" media="all">
  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
</head>

<body><?php include(dirname(__FILE__).'/../header.php');?>
  <main class="myitem-step02-page">
    <div class="container  flex">
      <section class="sidebar">
        <div class="container">
          <ul class="pages">
            <li class="page"><a href="/mypage/index.php" class="link flex"><img
                  src="../assets/img/mypage/icon_top.svg" alt="" class="icon">
                <p class="text">マイページトップ</p>
              </a></li>
            <li class="page"><a href="/maypage/password.php" class="link flex"><img
                  src="../assets/img/mypage/icon_password.svg" alt="" class="icon">
                <p class="text">パスワード変更</p>
              </a></li>
            <li class="page"><a href="mypage/myitem.php" class="link flex active"><img
                  src="../assets/img/mypage/icon_myitem.svg" alt="" class="icon">
                <p class="text">獲得した景品&景品発送</p>
              </a></li>
            <li class="page"><a href="/mypage/code.php" class="link flex"><img src="../assets/img/mypage/icon_code.svg"
                  alt="" class="icon">
                <p class="text">各種コード入力</p>
              </a></li>
            <li class="page"><a href="/mypage/withdrawal.php" class="link flex"><img
                  src="../assets/img/mypage/icon_withdrawal.svg" alt="" class="icon">
                <p class="text">退会手続き</p>
              </a></li>
          </ul>
        </div>
      </section>
      <section class="section-content">
        <div class="container">
          <h1 class="title">景品発送＞送付先確認</h1>
          <form action="" class="form">
            <p class="box-title">送付先確認</p>
            <table class="table">
              <tr class="cell">
                <th class="label">お名前</th>
                <td class="data flex"><input class="input" type="text" name="name" value="セルフ秋葉原店" readonly></td>
              </tr>
              <tr class="cell">
                <th class="label">住所</th>
                <td class="data"><input class="input" type="text" name="address" value="セルフ秋葉原店" readonly></td>
              </tr>
              <tr class="cell">
                <th class="label">電話番号</th>
                <td class="data"><input class="input" type="tel" name="tel" value="test8@asobox.ga" readonly></td>
              </tr>
              <tr class="cell">
                <th class="label">性別</th>
                <td class="data"><input class="input" type="gender" name="gender" value="男性" readonly></td>
              </tr>
            </table>

            <div class="buttons flex">
              <button class="button back" type="button" onclick="history.back()">
                <a href="index.php" class="link">
                  戻る
                </a>
              </button>
              <button class="button next" type="submit">
                <a href="/mypage/myitem-step01.php" class="link">
                  <img src="../assets/img/mypage/button_next.svg" alt="次へ">
                </a>
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php');?></body>

</html>