<div id="nav-drawer">
    <input id="nav-input" type="checkbox" class="nav-unshown">
    <label id="nav-open" for="nav-input"><span></span></label>
    <label class="nav-unshown" id="nav-close" for="nav-input"></label>
    <div id="nav-content">
        <div id="UserInfo">
            <div style="color:#ffffff;">
                <center>
                    <div id="browser">
                        <br><br><br><br><br><br>
                        ようこそ。<?php echo html_escape($member['name']); ?>さん。<BR>
                    </div>
                </center>
            </div>
        </div>

        <p class="nv_cts0"><i class="fas fa-utensils"></i> 食べる</p>
        <a class="nv_Link" href="./search.php"> <i class="fas fa-search"></i> 検索 </a>
        <a class="nv_Link" href="./submit.php"> <i class="fas fa-paper-plane"></i> 新規投稿 </a>
        <a class="nv_Link" href="#"> <i class="fas fa-star"></i> お気に入り </a>
        <a class="nv_Link" href="./apps.php"> <i class="fas fa-home"></i> ホームに戻る </a>
        <BR>
        <p class="nv_cts1"><i class="fas fa-user-circle"></i> アカウント</p>
        <a class="nv_Link1" href="./settings.php"> <i class="fas fa-user-cog"></i> アカウント設定 </a>
        <a class="nv_Link1" href="./logout.php"> <i class="fas fa-sign-out-alt"></i> ログアウト </a>
        <BR>
        
    </div>
</div>