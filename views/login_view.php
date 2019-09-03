<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>

    </head>
    
    <body>
        <h1>おかえりなさい</h1>
        <form action="" method="post">
            <table border="0">
                <tr>
                    <td align="right"><b> 学生番号：</b></td>
                    <td><input type="text" name="student_number" ><?php echo html_escape($errs['student_number']); ?></td>
                </tr>
                <tr>
                    <td align="right"><b> パスワード：</b></td>
                    <td><input type="password" name="password" ><?php echo html_escape($errs['password']); ?></td>
                </tr>
            </table>
            <input type="submit" value="ログイン">
        </form>
        <p>
            <a href="./signup.php">新規会員登録はこちら</a><BR>
        </p>
    </body>
</html>