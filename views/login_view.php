<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン</title>

    </head>
    
    <body>
        <h1>おかえりなさい</h1>
        <form action="cgi-bin/aaa.cgi" method="post">
            <table border="0">
                <tr>
                    <td align="right"><b> 学生番号：</b></td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td align="right"><b> パスワード：</b></td>
                    <td><input type="password" name="pass" ></td>
                </tr>
            </table>
        </form>
        <p>
            <input type="submit" value="ログイン">
        </p>
    </body>
</html>