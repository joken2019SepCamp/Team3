<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>検索</title>

    </head>
    
    <body>
        <form action="cgi-bin/aaa.cgi" method="post">
            <table border="0">
                <div>
                    <select name="genre" required>
                        <option value="">料理のジャンル</option>
                        <option value="肉類">肉類</option>
                        <option value="魚類">魚類</option>
                        <option value="ラーメン">ラーメン</option>
                    </select>
                <tr>
                    <td align="right"><b> 場所：</b></td>
                    <td>
                        <input type="radio" name="place" value="">郡山市内
                        <input type="radio" name="place" value="">郡山市外
                    </tr>
                    <tr>
                        <td align="right"><b> 予算上限：</b></td>
                        <td><input type="text" name="budget" ></td>
                    </tr>
                </div>
        </table>
        </form>
        <p>
            <input type="submit" value="検索">
        </p>
    </body>
</html>