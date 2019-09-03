<hedder>
    <?php require('./views/nav_menu.php'); ?>
    <table border="0" style="">
        <tr>
            <td><a href="#"><i class="fas fa-star fa-2x"></i><br>お気に入り</a></td>
            <td><a href="./search.php"><i class="fas fa-search fa-2x"></i><br>検索</a></td>
            <td><?php echo html_escape($member['name']); ?></td>
            <td><a href="./logout.php">ログアウト</a></td>
        </tr>
    </table>
</hedder>