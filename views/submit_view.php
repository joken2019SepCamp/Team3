<!-- この中に投稿画面のHTMLを書いていきます -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規投稿画面</title>

  </head>

  <body>

  <h1>新規投稿画面</h1>

    <div class="right">
      店名:<input type="text" name="shop" value="" size="50"><br><br>
      <select name="genre" required>
        <option value="">料理のジャンル</option>
        <option value="肉類">肉類</option>
        <option value="魚類">魚類</option>
        <option value="ラーメン">ラーメン</option>
      </select>

      <br>
      <br>
      予算<input type="text" name="money" value="" size="5">円まで　
      <input type="radio" name="koriyama" value="" >郡山
      <input type="radio" name="koriyama" value="" >郡山以外<br><br>
      私は<textarea name="cuisine" rows="1" cols="10"　placeholder="ラーメン"></textarea>
      を食べました。<br>
      <textarea name="kanso" rows="7" cols="100" placeholder="任意"></textarea>
      <br>
      <input type="button" value="投稿" onclick=""><br>

</html>