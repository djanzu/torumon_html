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
  <link href="../assets/css/pages/contact.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>


</head>

<body>
  <?php include(dirname(__FILE__).'../../header.php'); ?>
  <main class="contact-page">
    <section class="section-content">
      <div class="container">
        <h1 class="title">お問い合わせ</h1>
        <p class="required">
          <span class="red">※</span>印は必須項目
        </p>

        <form action="" class="form">
          <table class="table">
            <tr class="cell">
              <th class="label">お名前<span class="red">※</span></th>
              <td class="data">
                <input class="input" type="text" name="name" value="">
                <p class="error">お名前を入れていただけますか？</p>
              </td>
            </tr>
            <tr class="cell">
              <th class="label">メールアドレス<span class="red">※</span></th>
              <td class="data">
                <input class="input" type="email" name="email" value="">
                <p class="error">メールアドレスを入れていただけますか？</p>
              </td>
            </tr>

            <tr class="cell">
              <th class="label">ブース番号</th>
              <td class="data select">
                <select class="select" name="booth-name">
                  <option disabled selected value="">---</option>
                  <option value="001">001</option>
                  <option value="002">002</option>
                  <option value="003">003</option>
                </select>
              </td>
            </tr>

            <tr class="cell">
              <th class="label">お問い合わせ内容<span class="red">※</span></th>
              <td class="data select">
                <select class="select" name="title">
                  <option value="dummy1">ダミー1</option>
                  <option value="dummy2">ダミ-2</option>
                  <option value="others">その他のお問い合わせ</option>
                </select>
                <p class="error">お問い合わせ内容をお選びいただけますか？</p>
              </td>
            </tr>

            <tr class="cell">
              <th class="label detail">お問い合わせ詳細<span class="red">※</span></th>
              <td class="data">
                <input class="textarea" type="textarea" name="detail" placeholder="出来るだけ詳細な情報をご記入ください。" value="">
                <p class="error">お問い合わせ詳細を入れていただけますか？</p>
              </td>
            </tr>
          </table>

          <div class="button">
            <button class="link" type="submit" onSubmit="setcookie()">
              <a href="confirm.php">
                確認画面へ
              </a>
            </button>
          </div>
        </form>

        <div class="notice">
        <h2 class="title">お問い合わせに関する注意点</h2>
        <p class="text red">※お問い合わせの対応時間は、平日の10:00~19:00（土日祝日除く)です。</p>
        <p class="text">※土日祝日を挟む場合はご返答にお時間をいただきます。</p>
        <p class="text mb">※お問い合わせには順次対応していますが、内容によっては返信までにお時間をいただく場合がございます。</p>
        <p class="text">※お問い合わせをされた際に、ご入力いただいたメールアドレス宛に自動返信メールをお送りしております。<br>自動返信メールが受け取れなかった場合は、ご入力いただいたメールアドレスに誤りがあるか、<br>正常にお問い合わせが送信されてない場合がございます。<br>お問い合わせをされた後は、必ず自動返信メールをご確認ください。</p>
        </div>
      </div>
    </section>


  </main>
  <?php include(dirname(__FILE__).'../../footer.php'); ?>
</body>

</html>