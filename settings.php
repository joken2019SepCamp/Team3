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

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = get_post('name');
    $id = $_SESSION['member']['id'];  // ユーザーidを取得する

    $dbh = get_db_connect();
    $errs = array();

    // バリデーション
    if(!check_words($name, 50)){
        $errs['name'] = 'ユーザーネーム欄は必須、50文字以内です';
    }

    // エラーがなければデータを挿入
    if(empty($errs)){
        if(update_member_name($dbh, $name, $id)){
            // TODO: 何回もログインがでてきて素敵やんな by京都人

            session_regenerate_id(true);        // セッションIDの変更
            // セッションIDが盗まれていた場合
            // なりすましによる不正な操作を防ぐために
            // ログイン直前にセッションIDを切り替える！！

            $_SESSION['member'] = $member;      // ログイン
            header('Location: '.SITE_URL.'apps.php');  // トップ画面へ遷移
            exit;
        }
        
        $errs['name'] = 'ユーザー名の変更に失敗しました';
    }
}

include_once('./views/settings_view.php');