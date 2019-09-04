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

//掲示板の削除を行う
if(!empty($_POST['card_id'])){
    $card_id = $_POST['card_id'];
    var_dump($card_id);

    $sql = "DELETE FROM data WHERE id = '{$card_id}'";
    $dbh -> exec($sql);
    // header('Location: '.SITE_URL.'apps.php');
}
