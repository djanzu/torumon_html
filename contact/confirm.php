<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>お問い合わせ | トルもんランド</title>
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
  <link href="../assets/css/pages/contact-confirm.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>


</head>

<body>
  <?php include(dirname(__FILE__).'../../header.php'); ?>
  <main class="contact-confirm-page">
    <section class="section-content">
      <div class="container">
        <h1 class="title">お問い合わせ</h1>
        <p class="required">
          ご入力内容をご確認の上、よろしければ送信するボタンをクリックしてください。
        </p>

        <form action="" class="form">
          <table class="table">
            <tr class="cell">
              <th class="label">お名前</th>
              <td class="data">
                <input class="input" type="text" name="name" value="" readonly>
              </td>
            </tr>
            <tr class="cell">
              <th class="label">メールアドレス</th>
              <td class="data">
                <input class="input" type="email" name="email" value="" readonly>
              </td>
            </tr>

            <tr class="cell">
              <th class="label">ブース番号</th>
              <td class="data select">
                <select class="select" name="booth-name" readonly>
                  <option disabled selected value="">---</option>
                  <option value="001">001</option>
                  <option value="002">002</option>
                  <option value="003">003</option>
                </select>
              </td>
            </tr>

            <tr class="cell">
              <th class="label">お問い合わせ内容</th>
              <td class="data select">
                <select class="select" name="title" readonly>
                  <option value="dummy1">ダミー1</option>
                  <option value="dummy2">ダミ-2</option>
                  <option value="others">その他のお問い合わせ</option>
                </select>
              </td>
            </tr>

            <tr class="cell">
              <th class="label detail">お問い合わせ詳細</th>
              <td class="data">
                <input class="textarea" type="textarea" name="detail" placeholder="出来るだけ詳細な情報をご記入ください。" value=""
                  readonly>
              </td>
            </tr>
          </table>

          <div class="button flex">
            <button class="link back" type="button" onclick="history.back()">
              <a href="index.php">
                戻る
              </a>
            </button>
            <button class="link send" type="submit">
              送信
            </button>
          </div>
        </form>
      </div>
    </section>


  </main>
  <?php include(dirname(__FILE__).'../../footer.php'); ?>
</body>

</html>