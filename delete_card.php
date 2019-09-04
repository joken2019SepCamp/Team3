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

// ここに処理を追加していく
$card_id = $_POST['card_id'];
// var_dump($_POST);

$sql = "DELETE FROM data WHERE id = '{$card_id}'";
$dbh->query($sql);
header('Location: '.SITE_URL.'apps.php');