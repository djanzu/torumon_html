<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>マイページトップ | トルもんランド</title>
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
      <section class="sidebar">
        <div class="container">
          <ul class="pages">
            <li class="page">
              <a href="/mypage/index.php" class="link flex active">
                <img src="../assets/img/mypage/icon_top.svg" alt="" class="icon">
                <p class="text">マイページトップ</p>
              </a>
            </li>

            <li class="page">
              <a href="/maypage/password.php" class="link flex">
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
          <form action="" class="form">
            <h1 class="title">会員登録情報</h1>
            <table class="table">
              <tr class="cell">
                <th class="label">ニックネーム</th>
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
                <th class="label">メール配信サービス</th>
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
            <h2 class="title">基本情報</h2>
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
                <td class="data">
                  <input class="radio" id="man" type="radio" name="gender" value="man" checked="checked">男性
                  <input class="radio" id="woman" type="radio" name="gender" value="woman">女性

                </td>
              </tr>
            </table>
          </form>

          <form action="" class="form">
            <h2 class="title">お届け先住所録</h2>
            <p class="text">基本情報の場所とは別の場所におくる際にご登録ください。</p>
            <table class="table">
              <tr class="cell add-address">
                <th class="label address">郵便番号 住所</th>
                <th class="label name">お名前</th>
                <th class="label tel">電話番号</th>
                <th class="label gender">性別</th>
                <th class="label button">編集</th>
              </tr>
              <tr class="cell add-address read-area">
                <td class="data address">
                  <span class="zip-icon">〒</span><input class="input zip" type="text" name="zip" value="107-0052"
                    readonly>
                  <input class="input" type="text" name="zip" value="東京都港区赤坂4-5-19" readonly>
                </td>
                <td class="data name">
                  <input class="input" type="tel" name="name" value="トルもん" readonly>
                </td>
                <td class="data tel">
                  <input class="input" type="tel" name="tel" value="03-3586-0411" readonly>
                </td>
                <td class="data gender">
                  <p class="radio-text-gender man">男性</p>
                  <p class="radio-text-gender woman">女性</p>
                </td>
                <td class="data button">
                  <button class="button delete" type="submit">削除</button>
                </td>
              </tr>

              <tr class="cell add-address">
                <td class="data address">
                  <span class="zip-icon">〒</span><input class="input zip" type="text" name="zip" placeholder="1234567"
                    value="">
                  <input class="input" type="text" name="zip" placeholder="都道府県から" value="">
                </td>
                <td class="data name">
                  <input class="input" type="tel" name="name" placeholder="フルネームで" value="">
                </td>
                <td class="data tel">
                  <input class="input" type="tel" name="tel" placeholder="000-0000-0000" value="">
                </td>
                <td class="data gender">
                  <input class="radio" id="man" type="radio" name="gender" value="man" checked="checked">男性
                  <input class="radio" id="woman" type="radio" name="gender" value="woman">女性
                </td>
                <td class="data button">
                  <button class="button" type="submit">追加</button>
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