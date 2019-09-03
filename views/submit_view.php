<!-- この中に投稿画面のHTMLを書いていきます -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規投稿画面</title>

  </head>

  <body>
    <h1>ようこそ！！！</h1>

    <div class="right">
      店名:<input type="text" name="shop" value="" size="50"><br><br>
      <select name="genre" required>
        <option value="">料理のジャンル</option>
        <option value="肉類">肉類</option>
        <option value="魚類">魚類</option>
        <option value="ラーメン">ラーメン</option>
      </select>

      <select name="prefecture" required>
        <option value="">都道府県</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
      </select>

      <select name="city" required>
        <option value="">市町村</option>
        <option value="test1市">test1市</option>
        <option value="test2市">test2市</option>
        <option value="test3市">test3市</option>
      </select>
      <br>
      <br>
      予算<input type="text" name="money" value="" size="5">円まで　
      <input type="checkbox" name="koriyama" value="" >郡山<br>
      <br>
      私は<textarea name="cuisine" rows="1" cols="10">料理名</textarea>
      を食べました。<br>
      <textarea name="kanso" rows="7" cols="100">任意</textarea>

</html>