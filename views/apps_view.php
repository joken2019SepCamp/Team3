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
        <script type="text/javascript" src="JS/materialize.min.js"></script>

        <!-- 投稿ボタン -->
        <div id="submit_btm">
            <a class="btn-floating btn-large waves-effect waves-light red" href="./submit.php"><i class="fas fa-utensils"></i></a>
        </div>

        <?php require("./views/hedder_view.php"); ?>

        <div class="contents">
            <div class="col s12 m7">
                <h3>評価の高いお店</h3>

                <?php echo $html; ?>


            </div>     
        </div>
    </body>
</html>





