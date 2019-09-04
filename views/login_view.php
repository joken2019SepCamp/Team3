<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>
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

        <div class="contents">
            <h1>おかえりなさい</h1>
            <form action="" method="post">
                <table border="0" style="width:75%; text-align:center;">
                    <tr border="0">
                        <td align="right"><b> 学生番号：</b></td>
                        <td><input type="text" name="student_number" ><?php echo html_escape($errs['student_number']); ?></td>
                    </tr>
                    <tr border="0">
                        <td align="right"><b> パスワード：</b></td>
                        <td><input type="password" name="password"><?php echo html_escape($errs['password']); ?></td>
                    </tr>
                </table>
                <input type="submit" class="btn waves-effect waves-light" value="ログイン">
            </form>
            <p>
                <a href="./signup.php">新規会員登録はこちら</a><BR>
            </p>
        </div>
    </body>
</html>