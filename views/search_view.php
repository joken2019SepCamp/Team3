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
<<<<<<< Updated upstream
        <?php require("./views/hedder_view.php"); ?>
        <form action="" method="post">
            <table border="0" style="width:75%; margin:auto;">
=======
        <form action="" method="post">
            <table border="0">
>>>>>>> Stashed changes
                <div>
                    <select name="genre" required>
                        <option value="">料理のジャンル</option>
                        <option value="肉類">肉類</option>
                        <option value="魚類">魚類</option>
                        <option value="ラーメン">ラーメン</option>
                    </select>
                    <tr>
                        <td align="right"><b> 場所：</b></td>
                        <td>
                            <p>
                                <label>
                                    <input type="radio" name="place" value="">
                                    <span>郡山市内</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="radio" name="place" value="">
                                    <span>郡山市外</span>
                                </label>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><b> 予算上限：</b></td>
                        <td><input type="text" name="budget" ></td>
                    </tr>
                </div>
        </table>
        </form>
        <p>
            <input type="submit" value="検索">
        </p>
    </body>
</html>