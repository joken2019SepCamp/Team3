<!-- この中に投稿画面のHTMLを書いていきます -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規投稿画面</title>
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
    <link rel="stylesheet" type="text/css" href="https://materializecss.com/css/ghpages-materialize.css">
  </head>

  <body>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="JS/materialize.min.js"></script>

    <?php require("./views/hedder_view.php"); ?>

    <div class="contents">
    <h1>新規投稿画面</h1>
<!-- <<<<<<< Updated upstream -->
    <form action="submit.php" method="post" enctype="multipart/form-data">
      店名:<input type="text" name="shop" value="" size="50"><br><br>
      <!-- <a class="dropdown-trigger btn" href="#" data-taeget="cuisine">料理のジャンル</a>
      <ul id="cuisine" class="dropdown-content">
        <li><a href="#!">肉類</a></li>
        <li><a href="#!">魚類</a></li>
        <li><a href="#!">ラーメン</a></li>
      </ul> -->

      <label>料理のジャンル</label>
      <select class="browser-default">
          <option value="" disabled selected>選択してください</option>
          <option value="1">肉類</option>
          <option value="2">魚類</option>
          <option value="3">ラーメン</option>
      </select>
<!-- =======
      <form action="pic_receive.php"  method="post" enctype="multipart/form-date">
        店名:<input type="text" name="shop" value="" size="50"><br><br>
        <select name="genre" required>
          <option value="">料理のジャンル</option>
          <option value="肉類">肉類</option>
          <option value="魚類">魚類</option>
          <option value="ラーメン">ラーメン</option>
        </select>
>>>>>>> Stashed changes -->

        <br>
        <p>お店の写真：<input type="file" name="img"></p>
        <br>
        予算<span><input type="text" name="money" value="" size="5" style="width:15%;"></span>円まで
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

    </p><br><br>
        私は<textarea name="cuisine" rows="1" cols="10" placeholder="ラーメン"></textarea>
        を食べました。<br>
        <textarea name="kanso" rows="7" cols="100" placeholder="任意"></textarea>
        <br>
        <input type="submit" value="投稿" onclick=""><br>
      </form>
    </div>
</html>
