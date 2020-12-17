<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>獲得した景品&景品発送 | トルもんランド</title>
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
  <link href="../assets/css/pages/myitem.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/myitem.js"></script>

</head>

<body>
  <?php include ( dirname(__FILE__) . '/../header.php' ); ?>

  <main class="myitem-page">
    <div class="container  flex">
      <section class="sidebar is-tab">
        <div class="container">
          <ul class="pages">
            <li class="page">
              <a href="/mypage/index.php" class="link flex">
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
              <a href="/mypage/myitem-step01.php" class="link flex active">
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
          <h1 class="title is-tab">獲得した景品&景品発送</h1>
          <h1 class="title is-xs">未発送景品</h1>
          <form action="" class="form">
            <p class="box-title">景品一覧</p>
            <table class="table is-tab">
              <tr class="cell">
                <th class="label check"></th>
                <th class="label number">No.</th>
                <th class="label item">獲得景品</th>
                <th class="label status">発送状況</th>
              </tr>
              <tr class="cell">
                <td class="data check">
                  <input type="checkbox" class="checkbox">
                </td>
                <td class="data number">
                  <p class="text">1</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                  </div>
                </td>
                <td class="data status">
                  <p class="label unshipped">未発送</p>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                  <p class="text status-text">発送準備中</p>
                </td>
                <td class="data number">
                  <p class="text">2</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                  </div>
                </td>
                <td class="data status">
                  <p class="label prepared">発送準備中</p>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                  <p class="text status-text">発送済み</p>
                </td>
                <td class="data number">
                  <p class="text">3</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                  </div>
                </td>
                <td class="data status">
                  <p class="label onshipping">発送済み</p>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                  <p class="text status-text">発送済み</p>
                </td>
                <td class="data number">
                  <p class="text">3</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                  </div>
                </td>
                <td class="data status">
                  <p class="label onshipping">発送済み</p>
                </td>
              </tr>
            </table>

            <!-- スマホ用景品一覧 -->
            <table class="table is-xs">
              <tr class="cell">
                <th class="label check"></th>
                <th class="label number">No.</th>
                <th class="label item">獲得景品</th>
              </tr>
              <tr class="cell">
                <td class="data check">
                  <input type="checkbox" class="checkbox">
                </td>
                <td class="data number">
                  <p class="text">1</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                    <p class="label unshipped">未発送</p>
                  </div>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                <input type="checkbox" class="checkbox">
                </td>
                <td class="data number">
                  <p class="text">2</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                    <p class="label prepared">発送準備中</p>
                  </div>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                <input type="checkbox" class="checkbox">
                </td>
                <td class="data number">
                  <p class="text">3</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                    <p class="label onshipping">発送済み</p>
                    
                  </div>
                </td>
              </tr>
              <tr class="cell">
                <td class="data check">
                <input type="checkbox" class="checkbox">
                </td>
                <td class="data number">
                  <p class="text">3</p>
                </td>
                <td class="data item flex">
                  <img src="../assets/img/mypage/thumbnail_item.png" alt="景品サムネイル" class="thumbnail">
                  <div class="text">
                    <p class="title">トルモンぬいぐるみ B のっかりトルモン　-トレモンとゆかいな仲間たちシリーズ-</p>
                    <p class="date">獲得日時 ： 2020-08-31 16:19:18</p>
                    <p class="label onshipping">発送済み</p>
                  </div>
                </td>
              </tr>
            </table>
          </form>

          <form action="" class="form">
            <p class="box-title">送付先</p>
            <table class="table">
              <tr class="cell">
                <th class="label radio">
                  <input type="radio" class="radio" name="radio">
                </th>
                <td class="data default-address">
                  <p class="text">基本情報のところへ送る</p>
                </td>
              </tr>
            </table>
          </form>

          <form action="" class="form">
            <table class="table">
              <tr class="cell">
                <th class="label radio"></th>
                <th class="label name">名前</th>
                <th class="label address">住所</th>
              </tr>
              <tr class="cell">
                <td class="data radio">
                  <input type="radio" class="radio" name="radio">
                </td>
                <td class="data name">
                  <p class="text">トルもん</p>
                </td>
                <td class="data address">
                  <p class="text">東京都足立区</p>
                </td>
              </tr>
            </table>

            <button class="button" type="submit" onSubmit="setcookie()">
              <a href="myitem-step02.php" class="link">
              <img src="../assets/img/mypage/button_shipping.svg" alt="チェックした景品を発送" class="img">
              </a>
            </button>
          </form>


        </div>

      </section>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>