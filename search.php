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

// データベースからジャンルデータを取得
$sql = "SELECT * FROM genre";
$thread = $dbh -> query($sql);
$genre = $thread -> fetchAll(PDO::FETCH_ASSOC);

include_once('./views/search_view.php');