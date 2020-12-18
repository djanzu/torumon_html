<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>会員情報編集| トルもんランド</title>
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
  <link href="../assets/css/pages/mypage-edit.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include ( dirname(__FILE__) . '/../header.php' ); ?>

  <main class="mypage-edit-page">
    <div class="container  flex">
      <section class="section-content">
        <div class="container">
          <form action="" class="form">
            <h1 class="title">会員登録情報</h1>
            <table class="table">
              <tr class="cell">
                <th class="label">ニックネーム<span class="is-xs">(最大10文字)</span></th>
                <td class="data flex">
                  <input class="input" type="text" name="name" value="">
                  <button class="button" type="button">保存する</button>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">名乗る称号</th>
                <td class="data flex">
                  <select class="select" id="status-select" name="status">
                    <option value="pro">強者</option>
                    <option value="beginner">初心者</option>
                    <option value="dummy">ダミー</option>
                  </select>
                  <button class="button" type="button">保存する</button>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">メールアドレス</th>
                <td class="data">
                  <input class="input" type="email" name="email" value="">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">メール配信<span class="block">サービス</span></th>
                <td class="data">
                  <input class="radio" id="yes" type="radio" name="mail-magazine" value="yes">希望する
                  <input class="radio" id="no" type="radio" name="mail-magazine" value="no" checked="checked">希望しない
                </td>
              </tr>
              <tr class="cell">
                <th class="label">SMS認証</th>
                <td class="data">
                  <p class="text">認証済み<br>※ゲームプレイ、課金、各種ボーナスポイントを受け取るためには認証を完了されている必要があります。</p>
                </td>
              </tr>
            </table>
          </form>

          <form action="" class="form">
            <h2 class="title basic-info">基本情報</h2>
            <button class="button-basechange" type="submit">保存する</button>
            <table class="table">
              <tr class="cell">
                <th class="label">お名前</th>
                <td class="data flex">
                  <input class="input" type="text" name="name" value="">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">住所</th>
                <td class="data">
                  〒<input class="input" type="text" name="zip" value="">
                  <input class="input" type="text" name="zip" value="">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">電話番号</th>
                <td class="data">
                  <input class="input" type="tel" name="tel" value="">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">性別</th>
                <td class="data gender">
                <label class="flex"><input type="radio" class="radio" id="man" name="gender" value="man" checked="checked"><p class="label">男性</p></label>
                <label class="flex"><input type="radio" class="radio" id="woman" name="gender" value="woman"><p class="label">女性</p></label>

                </td>
              </tr>
            </table>
          </form>
        </div>

      </section>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>