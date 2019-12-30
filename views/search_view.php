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

        <?php require("./views/header_view.php"); ?>
        <div class="contents">
            <form action="" method="post">
                <table border="0" style="width:75%; margin:auto;">
            <form action="" method="post">
                <table border="0">
                    <div>
                        <h3>お店の検索</h3>
                        <center>
                            <label>料理のジャンル</label>
                            <select class="browser-default" style="width:75%;" name="genre">
                            <option value="" disabled selected>選択してください</option>
                            <?php foreach($genre as $row){?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['genre']; ?></option>
                            <?php } ?>
                            </select>
                        </center>

                        
                        <tr>
                        <td align="right"><b> 場所：</b></td>
                        <td>
                        <p>
                            <label>
                                <input class="with-gap" name="koriyama_true" type="radio"  />
                                <span>郡山市内</span>
                            </label>
                            <label>
                                <input class="with-gap" name="koriyama_false" type="radio"  />
                                <span>郡山市外</span>
                            </label>
                        </p>

                        </tr>
                    </div>
                </table>
                <p>
                    <center>
                        <input type="submit" value="検索" class="button">
                    </center>
                </p>
            </form>
            <BR>
            <BR>
            <?php
            if(isset($html)){
                echo $html;
            }
            ?>
        </div>
    </body>
</html>