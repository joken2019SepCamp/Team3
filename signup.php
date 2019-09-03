<?php

// 必要ファイルを読み込む
require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = get_post('name');
    $student_number = get_post('student_number');
    $password = get_post('password');

    $dbh = get_db_connect();    // DB接続
    $errs = array();

    // 入力値のバリデーション
    if(!check_words($name, 50)){
        $errs['name'] = 'ユーザーネーム欄は必須、50文字以内です';
    }

    // if(!filter_var($student_number, FILTER_VALIDATE_student_number)){
    //     // 学生番号の形式が正しいかどうか確認
    //     $errs['student_number'] = '学生番号の形式が正しくないです';
    // }else
    if(student_number_exists($dbh, $student_number)){
        $errs['student_number'] = 'この学生番号は既に登録されています';
    }elseif(!check_words($student_number, 100)){
        $errs['student_number'] = '学生番号は必須、10文字以内です';
    }

    if(!check_words($password, 50)) {
        $errs['password'] = 'パスワードは必須、50文字以内です';
    }


    // エラーがなければデータを挿入
    if(empty($errs)){
        if(insert_member_data($dbh, $name, $student_number, $password)){
            // データの挿入
            header('Location: '.SITE_URL.'login.php');  //ログイン画面へ遷移
            exit;
        }
        $errs['password'] = '登録に失敗しました';
    }
}

include_once('./views/signup_view.php');    //ビューファイルの読み込み