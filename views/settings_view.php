<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>アカウント設定</title>
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