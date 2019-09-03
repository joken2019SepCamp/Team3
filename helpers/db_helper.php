<?php

function get_db_connect(){

    try{
        $dsn = DSN;
        $user = DB_USER;
        $password = DB_PASSWORD;

        $dbh = new PDO($dsn, $user, $password);

    }catch(PDOException $e){
        echo($e->getMessage());
        die();
    }
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

function student_number_exists($dbh, $student_number){
    
    $sql = "SELECT COUNT(id) FROM members where student_number = :student_number";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':student_number', $student_number, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);    // 結果を配列で取得する
    if($count['COUNT(id)'] > 0){
        //件数を判定
        return TRUE;
    }else{
        return FALSE;
    }
}

function insert_member_data($dbh, $name, $student_number, $password){

    $password = password_hash($password, PASSWORD_DEFAULT);
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO members (name, student_number, password, created) VALUE (:name, :student_number, :password, '{$date}')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':student_number', $student_number, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    if($stmt->execute()){
        return TRUE;
    }else{
        return FALSE;
    }
}

// メールアドレスとパスワードが一致するか調べる
function select_member($dbh, $student_number, $password){

    $sql = 'SELECT * FROM members WHERE student_number = :student_number LIMIT 1'; // メールアドレスが一致するデータを取得する
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':student_number', $student_number, PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $data['password'])){
            // パスワードを検証する

            return $data;   // 会員データを渡す
        }else{
            return FALSE;
        }
        return FALSE;
    }
}

// 削除パスが正しいか検証し、正しければ削除実行
function delete_pass($dbh, $delete_id, $del_pass){

    $sql = 'SELECT * FROM bbs WHERE id = :id LIMIT 1'; // IDが一致するデータを取得する
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $delete_id, PDO::PARAM_INT);    // :idを$delete_idに置換え
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($del_pass, $data['delete_pass'])){
            // パスワードを検証する

            // return $data;   // 会員データを渡す

            // 正しければ削除を実行
            $sql = 'DELETE FROM bbs WHERE id = :id';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':id', $delete_id, PDO::PARAM_INT);
            $stmt->execute();
            
            return TRUE;    // TRUEを返す
        }else{
            return FALSE;
        }
        return FALSE;
    }
}
