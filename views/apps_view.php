<!-- ホーム画面 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>食べ○グ</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="./CSS/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- fontawesome(アイコン) -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <link rel="stylesheet" type="text/css" href="./CSS/style.css">
        <link rel="stylesheet" type="text/css" href="./CSS/HamburgerMenu.css">
    </head>
    <body>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <!-- 投稿ボタン -->
        <div id="submit_btm">
            <a class="btn-floating btn-large waves-effect waves-light red" href="./submit.php"><i class="fas fa-utensils"></i></a>
        </div>

        <?php require("./views/hedder_view.php"); ?>

        <div class="contents">
          <div class="col s12 m7">
            <h3>評価の高いお店</h3>
            <div class="card horizontal">
              <div class="card-image">
                <img class="img_card" src="https://tabiiro.jp/lpimg/gourmet/308287/main/img1.jpg">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4>1 - ガスト安積店</h4>
                  <div class="info">
                    カズ之助  2019/09/03  ファミリーレストラン
                  </div>

                </div>
                <div class="card-action">
                  <a href="#"><i class="fas fa-thumbs-up"></i> いいね!</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image">
              <img class="img_card" src="https://tabiiro.jp/lpimg/gourmet/308287/main/img1.jpg">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h4>2 - ガスト安積店</h4>
                <div class="info">
                  カズ之助  2019/09/03  ファミリーレストラン
                </div>

              </div>
              <div class="card-action">
                <a href="#"><i class="fas fa-thumbs-up"></i> いいね!</a>
              </div>
            </div>
          </div>

                
        </div>
    </body>
</html>





