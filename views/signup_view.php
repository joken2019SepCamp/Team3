<!-- この中に新規会員登録画面のHTMLを書いていきます -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規会員登録</title>
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

    <div class="contents">
      <h1>ようこそ！！！</h1>
      <form action="signup.php" method="POST">
        ※すべて必須項目です。<br>
        学籍番号:<input type="text" name="student_number"><?php echo $errs['student_number']; ?><br>
        ユーザーネーム:<input type="text" name="name"> <?php echo $errs['name']; ?><br>
        パスワード：<input type="password" name="password"><?php echo $errs['password']; ?><br>
        <br>
        <!-- <input type="button" value="プロフィール画像" onclick=""> -->
        <input type="submit" class="btn waves-effect waves-light" value="登録"><br>
      </form>
    </div>

  </body>


</html>