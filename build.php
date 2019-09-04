<?php

require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

session_start();

// ログイン中か確認する
if(empty($_SESSION['member'])){
    header('Location: '.SITE_URL.'login.php');
    exit;
}

$member = $_SESSION['member'];  // クライアントの会員データを取得
$dbh = get_db_connect();
$members = array();

//掲示板の追加処理を行う

if (isset($_POST["newbbs"])) {
  $delete_pass = htmlspecialchars($_POST["delete_pass"], ENT_QUOTES);
  $bbs = htmlspecialchars($_POST["bbs"], ENT_QUOTES);

  if(!empty($delete_pass)){
    $delete_pass = password_hash($delete_pass, PASSWORD_DEFAULT);
  }
  $date = date('Y-m-d H:i:s');
  $post_user = $member['email'];

  $sql = "INSERT INTO bbs (content, delete_pass, post_user, post_time) VALUES (:content, :delete_pass, :post_user, :post_time)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':content', $bbs, PDO::PARAM_STR);

  if(!empty($delete_pass)){
    $stmt->bindValue(':delete_pass', $delete_pass, PDO::PARAM_STR);
  }else{
    $null = NULL;
    $stmt->bindValue(':delete_pass', $null, PDO::PARAM_STR);
  }

  $stmt->bindValue(':post_user', $member['email'], PDO::PARAM_STR);
  $stmt->bindValue(':post_time', $date, PDO::PARAM_STR);
  $stmt->execute();
  // $name = "db/".$newdbname.".db";
  // $db = new SQLite3($name);
  // $sql = "CREATE TABLE bbs (id INTEGER PRIMARY KEY, hiduke TEXT, comment TEXT)";
  // $res = $db -> query($sql);
  // var_dump($res);

  //ファイルのモードを変更する
  // chmod("db/".$newdbname.".db" , 0766);
  
  //初期のデータを格納(削除可能)
  // 投稿日時等を取得する
  $w = date("w");
  $week_name = ["日", "月", "火", "水", "木", "金", "土"];
  $hiduke = date("Y-m-d H:i:s")."(".$week_name[$w].")";
  //$name = "sqlite:db/".$dbname.".db";
  //投稿処理
  //$db = new PDO($name);
  // $db->exec("INSERT INTO bbs (hiduke, comment) VALUES ('$hiduke', '掲示板が作成されました。')");
  //ここまで



  $db = null;
}
  //echo "新しい掲示板「".$newdbname_kana."」を作りました。<br><br>";
  ?>

  <!DOCTYPE HTML>
  <html>
  <head>
    <title>祝！投稿成功！</title>        
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css" media="all">
    <link rel="stylesheet" href="CSS/style2.css" media="all">
    <!--リダイレクト処理-->
    <meta http-equiv="refresh" content="3; url=./apps.php">
  </head>
  <body>
  <?php
    echo "<p class=\"msg\">投稿しました！！</p>";
    echo "自動的に掲示板に戻ります。少し待っててね！";
  ?>
  </body>
</head>