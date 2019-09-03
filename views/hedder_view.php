<hedder>
    <?php require('./views/nav_menu.php'); ?>
    <table border="0" style="">
        <tr>
            <td><i class="fas fa-star fa-2x"></i><br><a href="#">お気に入り</a></td>
            <td><i class="fas fa-search"></i><br><a href="./search.php">検索</a></td>
            <td><?php echo html_escape($member['name']); ?></td>
            <td><a href="./views/logout.php">ログアウト</a></td>
        </tr>
    </table>
</hedder>