<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>検索</title>
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

        <?php require("./views/hedder_view.php"); ?>
        <form action="" method="post">
            <table border="0" style="width:75%; margin:auto;">
=======
        <form action="" method="post">
            <table border="0">
>>>>>>> Stashed changes
                <div>
                    <!-- <div class="browser-default">
                        <select>
                            <option value="" disabled selected>選択してください</option>
                            <option value="1">肉類</option>
                            <option value="2">魚類</option>
                            <option value="3">ラーメン</option>
                        </select>
                        <label>料理のジャンル</label>
                    </div> -->

                    <center>
                        <label>料理のジャンル</label>
                        <select class="browser-default" style="width:75%;">
                            <option value="" disabled selected>選択してください</option>
                            <option value="1">肉類</option>
                            <option value="2">魚類</option>
                            <option value="3">ラーメン</option>
                        </select>
                    </center>

                    <!-- あああ -->
                    <tr>
                    <td align="right"><b> 場所：</b></td>
                    <td>
                    <p>
                        <label>
                            <input class="with-gap" name="koriyama" type="radio"  />
                            <span>郡山市内</span>
                        </label>
                        <label>
                            <input class="with-gap" name="koriyama" type="radio"  />
                            <span>郡山市外</span>
                        </label>
                    </p>

                    </tr>
                    <tr>
                        <td align="right"><b> 予算上限：</b></td>
                        <td><input type="text" name="budget" ></td>
                    </tr>
                </div>
        </table>
        </form>
        <p>
            <center>
                <input type="submit" value="検索">
            </center>
        </p>
    </body>
</html>