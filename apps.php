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

// データ全件を取得する(good数で降順)
$sql = "SELECT * FROM data ORDER BY good DESC";
$stmt = $dbh -> query($sql);
$list = $stmt -> fetchAll(PDO::FETCH_ASSOC);


foreach($list as $row){
    // var_dump($row);
    // 投稿者idと投稿者名を紐付ける
    $sql_posted = "SELECT * FROM members WHERE id = '".$row['contributor']."' LIMIT 1";
    $stmt = $dbh->query($sql_posted);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $user_name = html_escape($user[0]['name']);

    // ジャンルIDとジャンルを紐付ける
    $sql = "SELECT * FROM genre WHERE id = '".$row['genre']."' LIMIT 1";
    $stmt = $dbh->query($sql);
    $genre_data = $stmt->fetch(PDO::FETCH_ASSOC);
    $genre = html_escape($genre_data['genre']);

    if($row['is_koriyama'] === '1'){
        $koriyama = "郡山市内";
    }else{
        $koriyama = "郡山市外";
    }

    if($row['del_flg'] === "0"){
        if($user[0]['id'] === $member['id']){
            // 自分の投稿
            $html .= '<form action="./delete_card.php" method="POST">
                        <input type="hidden" value="'.$row['id'].'" name="card_id">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img class="img_card" src="'.$row['img_path'].'">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4><b>'.$row['id'].' - '.$row['store_name'].'</b></h4>
                                    <div class="info">
                                        '.$user_name.'  '.$row['date'].'  '.$genre.'  '.$koriyama.'
                                    </div>
                                    <p class="card_text">
                                        '.$row['discription'].'
                                    </p>
                                </div>
                                <div class="card-action">
                                    <span style="color:#ffa000;"<i class="fas fa-kiss-wink-heart"></i> '.$row['good'].'</span>
                                    <button class="waves-effect waves-teal btn-flat">
                                        <span style="color:#ffa000;"><i class="fas fa-trash"></i> 投稿を削除する</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>';
        
        }else{
            // 他人の投稿
            $html .= '<form action="./plus_one.php" method="POST">
                        <input type="hidden" value="'.$row['id'].'" name="card_id">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img class="img_card" src="'.$row['img_path'].'">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <h4><b>'.$row['id'].' - '.$row['store_name'].'</b></h4>
                                    <div class="info">
                                        '.$user_name.'  '.$row['date'].'  '.$genre.'  '.$koriyama.'
                                    </div>
                                    <p class="card_text">
                                        '.$row['discription'].'
                                    </p>
                                </div>
                                <div class="card-action">
                                    <button class="waves-effect waves-teal btn-flat">
                                        <span style="color:#ffa000;"><i class="fas fa-kiss-wink-heart"></i> Love!</span>
                                    </button>
                                        <span style="color:#ffa000;">現在のLove!数：'.$row['good'].'</span>
                                </div>
                            </div>
                        </div>
                    </form>';
        }
    }
}

include_once('./views/apps_view.php');