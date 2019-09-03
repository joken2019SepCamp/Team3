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

                    <p class="nv_cts1"><i class="fas fa-user-circle"></i> アカウント</p>
                    <a class="nv_Link1" href="#"> <i class="fas fa-user-cog"></i> アカウント設定 </a>
                    <a class="nv_Link1" href="./logout.php"> <i class="fas fa-sign-out-alt"></i> ログアウト </a>
                    <BR>
                    <p class="nv_cts2"><i class="fas fa-id-card"></i> コンタクト</p>
                    <a class="nv_Link2" href="https://twitter.com/Tech_Kazu"> <i class="fab fa-twitter"></i> フォローする</a>
                    <a class="nv_Link2" href="https://github.com/kazuki19992"> <i class="fab fa-github"></i> GitHubを見てみる</a>
                    <a class="nv_Link2" href="mailto:kushida98@gmail.com"> <i class="fas fa-envelope"></i> メールで不具合を報告する</a>

                </div>
            </div>