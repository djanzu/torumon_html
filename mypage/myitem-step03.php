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
  <link href="../assets/css/pages/myitem-step03.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/myitem-step03.js"></script>
</head>

<body><?php include(dirname(__FILE__).'/../header.php');?>
  <main class="myitem-step03-page">
    <div class="container  flex">
      <section class="sidebar is-tab">
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
          <h1 class="title is-tab">景品発送＞送付先確認</h1>
          <h1 class="title is-xs">送付先確認</h1>
          <form action="" class="form">
            <p class="box-title">景品一覧</p>
            <table class="table">
              <tr class="cell">
                <th class="label">所有ポイント</th>
                <td class="data flex">
                  <p class="text">1,000pt</p>
                  <div class="button">
                    <a href="/mypage/point.php" class="link">
                      <img src="../assets/img/point_buy.svg" alt="ポイントを購入" class="img">
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="cell">
                <th class="label pay">支払い方法</th>
                <td class="data pay flex">
                <label class="flex"><input type="radio" class="radio" id="pay" name="radio"><p class="label">無料配送チケットを使用する</p></label>
                <label class="flex point"><input type="radio" class="radio" id="pay" name="radio"><p class="label">ポイント500pを使用する</p></label>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">配送時間</th>
                <td class="data time flex">
                <select class="select" id="time-select" name="time" value="">
                    <option value="12:00~14:00">12:00~14:00</option>
                    <option value="14:00~16:00">14:00~16:00</option>
                    <option value="16:00~18:00">16:00~18:00</option>
                    <option value="18:00~20:0">18:00~20:00</option>
                  </select>
                  <p class="notice">※既に発送依頼をされている場合、ご希望に添えない場合がございます。</p>
                </td>
              </tr>
            </table>

            <div class="buttons flex">
            <button class="button next" type="submit">
                <a href="/mypage/myitem-step04.php" class="link">
                  <img src="../assets/img/mypage/button_next.svg" alt="次へ">
                </a>
              </button>
              <button class="button back" type="button" onclick="history.back()">
                <a href="index.php" class="link">
                  戻る
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