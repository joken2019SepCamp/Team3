<!-- この中に新規会員登録画面のHTMLを書いていきます -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規会員登録</title>

  </head>

  <body>
    <h1>ようこそ！！！</h1>

    <div class="right">
      <form action="signup.php" method="POST">
        ※すべて必須項目です。<br>
        学籍番号:<input type="text" name="student_number"><?php echo $errs['student_number']; ?><br>
        ユーザーネーム:<input type="text" name="name"> <?php echo $errs['name']; ?><br>
        パスワード：<input type="password" name="password"><?php echo $errs['password']; ?><br>
        <br>
        <!-- <input type="button" value="プロフィール画像" onclick=""> -->
        <input type="submit" value="登録"><br>
      </form>
    </div>

  </body>


</html>