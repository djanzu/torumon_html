<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>景品配送先編集  | トルもんランド</title>
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
  <link href="../assets/css/pages/mypage-address.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>

</head>

<body>
  <?php include ( dirname(__FILE__) . '/../header.php' ); ?>

  <main class="mypage-address-page">
    <div class="container  flex">

      <section class="section-content">
        <div class="container">
          <form action="" class="form">
            <h2 class="title">景品配送先編集</h2>
            <p class="text">基本情報の場所とは別の場所におくる際にご登録ください。</p>
            <table class="table">
            <tr class="cell read-area">
                <th class="label">お名前</th>
                <td class="data flex">
                <input class="input" type="tel" name="name" value="トルもん" readonly>
                </td>
              </tr>
              <tr class="cell read-area">
                <th class="label">住所</th>
                <td class="data">
                <span class="zip-icon">〒</span><input class="input zip" type="text" name="zip" value="107-0052"
                    readonly>
                  <input class="input" type="text" name="zip" value="東京都港区赤坂4-5-19" readonly>
                </td>
              </tr>
              <tr class="cell read-area">
                <th class="label">電話番号</th>
                <td class="data">
                <input class="input" type="tel" name="tel" value="03-3586-0411" readonly>
                </td>
              </tr>
              <tr class="cell read-area">
                <th class="label">性別</th>
                <td class="data gender">
                <p class="radio-text-gender man">男性</p>
                  <p class="radio-text-gender woman">女性</p>
                </td>
              </tr>
              <tr class="cell">
                <th class="label">編集</th>
                <td class="data button">
                <button class="button delete" type="submit">削除</button>
                </td>
              </tr>
            </table>

            <table class="table">
            <tr class="cell">
                <th class="label">お名前</th>
                <td class="data flex">
                <input class="input" type="tel" name="name" value="" placeholder="フルネームで">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">住所</th>
                <td class="data">
                <span class="zip-icon">〒</span><input class="input zip" type="text" name="zip" value=""
                    placeholder="1234567">
                  <input class="input" type="text" name="zip" value="" placeholder="都道府県から">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">電話番号</th>
                <td class="data">
                <input class="input" type="tel" name="tel" value="" placeholder="000-0000-0000">
                </td>
              </tr>
              <tr class="cell">
                <th class="label">性別</th>
                <td class="data gender">
                <label class="flex"><input type="radio" class="radio" id="man" name="gender" value="man" checked="checked"><p class="label">男性</p></label>
                <label class="flex"><input type="radio" class="radio" id="woman" name="gender" value="woman"><p class="label">女性</p></label>

                </td>
              </tr>
              <tr class="cell">
                <th class="label">編集</th>
                <td class="data button">
                <button class="button add" type="submit">追加</button>
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