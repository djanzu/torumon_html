<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>初めての方へ | トルもんランド</title>
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
  <link href="../assets/css/pages/guid.css" rel="stylesheet" media="all">

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages/guid.js"></script>

  <!-- slick -->
  <link rel="stylesheet" href="../assets/css/slick/slick.css">
  <link rel="stylesheet" href="../assets/css/slick/slick-theme.css">
  <script src="../assets/js/slick/slick.min.js"></script>

</head>

<body>
  <?php include(dirname(__FILE__).'/../header.php'); ?>

  <main class="guid-page">
    <section class="section-content">
      <div class="container">
        <h1 class="title">初めての方へ</h1>
        <!-- タブラベル -->
        <input id="tab01" type="radio" name="tab_item" checked>
        <label class="tab_item" for="tab01">トルモンランドとは</label>
        <input id="tab02" type="radio" name="tab_item">
        <label class="tab_item" for="tab02">ポイントについて</label>
        <input id="tab03" type="radio" name="tab_item">
        <label class="tab_item" for="tab03">操作方法</label>
        <input id="tab04" type="radio" name="tab_item">
        <label class="tab_item" for="tab04">景品発送について</label>
        <input id="tab05" type="radio" name="tab_item">
        <label class="tab_item" for="tab05">推奨スペック</label>



        <!-- タブ1 -->
        <div class="tab_content" id="tab01_content">
          <div class="slide">
            <img src="../assets/img/guid/whatis01.png">
            <img src="../assets/img/guid/whatis01.png">
            <img src="../assets/img/guid/whatis01.png">
          </div>
          <p class="text">
            トルモンランドは、インターネット経由（PC・スマートフォン・タブレット端末）でクレーンゲームを楽しむことができるサービスです。ゲームセンター等に設置されている本物のクレーンゲーム機をリアルタイムに遠隔操作して景品を獲得することが可能です。獲得した景品は全国どこへでも送料無料(※)でお届けします。<br><br>※毎週火曜日にSMS承認済みの有効なアカウントに１週間有効の無料配送チケット１回分が配布されます。<br>詳しくは<a
              href="" class="link">景品発送について</a>をご確認ください。
          </p>
        </div>


        <!-- タブ2 -->
        <div class="tab_content" id="tab02_content">
          <p class="text mb">
            トルモンランドでは、専用ポイントを購入することでオンラインクレーンゲームを楽しむことができます。<br>専用ポイントを購入するには規約に同意の上、無料会員登録を行いアカウントを作成してください。<br>作成したアカウントでログイン後に下記より、ポイント購入の上オンラインクレーンゲームをお楽しみ下さい。<br><br>
            <span
              class="notice">※ポイントの有効期限は180日です。無償ポイントの種類によっては期日が異なる場合がございます（例：ログインボーナスで得られたポイントの有効期限はログインボーナス対象となる課金額を課金した日から90日です）。ポイントは有償無償区別なく、期限が近いものから使用されます。</span>
          </p>
          <ul class="buttons flex">
            <li class="button">
              <a href="" class="link">
                <img src="../assets/img/guid/button-registration.svg" alt="無料会員登録はこちら" class="img">
              </a>
            </li>
            <li class="button">
              <a href="" class="link">
                <img src="../assets/img/guid/button-points.svg" alt="ポイント購入(会員専用" class="img">
              </a>
            </li>
            <li class="button">
              <a href="" class="link">
                <img src="../assets/img/guid/button-list.svg" alt="景品一覧を見る" class="img">
              </a>
            </li>
          </ul>
        </div>


        <!-- タブ3 -->
        <div class="tab_content third" id="tab03_content">
          <div class="slide">
            <img src="../assets/img/guid/howto01.png">
            <img src="../assets/img/guid/howto01.png">
            <img src="../assets/img/guid/howto01.png">
          </div>

          <p class="text mb">
            1.「プレイ予約」を押すとゲームが開始されます。<br>2.「ヨコ」ボタン→「タテ」ボタンで景品を狙います。<br>3.画面手前に景品が落ちると獲得です。<br>4.獲得した景品は登録住所へ無料にて発送します。
          </p>
          <p class="label">
            プレイ予約
          </p>
          <p class="text mb">
          他プレイヤーがプレイ中の場合は「プレイ予約」を押すと「順番待ち状態」になります。<br>前のプレイヤーが終了すると「あなたの番になりました」POPが表示され、「OK」を押すとゲームがスタートします。<br><br>※これを「プレイ状態」と言います。
          </p>

          <p class="label">
            予約・プレイ解除
          </p>
          <p class="text">
          「順番待ち状態」状態から、リロードまたは他のクレーンゲームに移動すると「順番待ち状態」は自動的に解除されますので<br>ご注意ください。<br>「プレイ状態」になってから、「約50秒間」で、自動的にゲームオーバーとなり次の人に順番が移ります。画面左上に残り時間が表示されますが、これは目安になります。<br>プレイ中に他のページ・クレーンゲームに移動、またはブラウザをリロードすると「プレイ状態」は解除されます。<br>複数タブを開いての動作は対応しておりません。<br><br>※上記のようなプレイ状態が解除された場合に景品を獲得されても獲得は無効になりますのでご注意ください。
          </p>

        </div>

        <!-- タブ4 -->
        <div class="tab_content" id="tab04_content">
          <p class="text">
            景品を獲得したら、必ず住所の登録をしてください。<a href="" class="link">マイページ</a>からお届け先を登録できます。<br>
            景品の発送はマイページの<a href=""
              class="link">獲得した景品&景品発送</a>から発送依頼をすることができます。<br><br>※お届けの際、不在及び住所不明の場合は当社にて景品を保管させて頂きます。<br>保管期間は獲得日時より３０日となります。この期間を超えた場合、発送にはお応えすることができませんのでご注意ください。<br>また、長期不在などのお客様都合により弊社に返送されてしまった場合、再び発送するためには500Pが必要になります。<br><br>景品には賞味期限があるものがございます。景品到着後に速やかにお召し上がりください。<br>※獲得時間をもちまして３０日の超過となりますのでご注意くださいませ。
          </p>
        </div>

        <!-- タブ5 -->
        <div class="tab_content fifth" id="tab05_content">
          <p class="label">接続回線推奨スペック</p>
          <p class="text mb">インターネット接続　：　光ファイバー相当の回線速度

          <p class="label">windows 推奨動作環境</p>
            <ul class="infos">
              <li class="info flex">
              <p class="label">OS</p>
              <p class="data">Windows7またはWindows10</p>
              </li>
              <li class="info flex">
              <p class="label">CPU</p>
              <p class="data">Intel 1.8 GHｚ相当以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">メモリ</p>
              <p class="data">1GB以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">画面解像度</p>
              <p class="data">1024×768以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">ブラウザ</p>
              <p class="data">GoogleChrome最新版、Firefox最新版, Edge最新版 (InternetExplorer11でプレイできたという報告はありますが動作保証はしておりません。) ※ウィルス対策ソフトが動作していると上手く操作できない場合があります。</p>
              </li>
            </ul>

        
          <p class="label">Mac 推奨動作環境</p>
          <ul class="infos">
              <li class="info flex">
              <p class="label">OS</p>
              <p class="data">Mac OSX10.5以上</p>
              </li>
              <li class="info flex">
              <p class="label">CPU</p>
              <p class="data">Intel 1.8 GHｚ相当以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">メモリ</p>
              <p class="data">1GB以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">画面解像度</p>
              <p class="data">1024×768以上</p>
              </li>
            
              <li class="info flex">
              <p class="label">ブラウザ</p>
              <p class="data">Safari最新版、GoogleChrome最新版、※Firefox最新版</p>
              </li>
            </ul>

         
          <p class="text">
            快適動作のために、是非チェックをお願い致します。<br>※Firefoxは一部の環境で動画がうまく再生されない場合がございます。その際は別のブラウザをご利用ください。<br>※その他のOS及びブラウザについては、一部機能において正常に動作しない可能性がございますので、サポート対象外とさせていただいております。<br>※またアプリ版トレモンランドとの同時動作は保証しておりませんのでご遠慮ください。</p>
          </p>
        </div>
      </div>
    </section>
  </main>
  <?php include(dirname(__FILE__).'/../footer.php'); ?>
</body>

</html>