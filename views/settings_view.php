<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>アカウント設定</title>
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
  </head>

  <body>
  <?php require("./views/hedder_view.php"); ?>
  <h3>アカウント設定</h3>
       <form action="#" method="POST">
        新しいユーザーネーム:<input type="text" name="name"> <?php echo $errs['name']; ?><br>
        <br>
        <!-- <input type="button" value="プロフィール画像" onclick=""> -->
        <input type="submit" class="btn waves-effect waves-light" value="保存"><br>
      </form>
 </body>
</html>