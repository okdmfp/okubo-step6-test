<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <!-- 外部CSSファイルを読み込み -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2>お問い合わせフォーム</h2>
    </header>

    <aside>
        <ul>
            <li><a href="#">トップページ</a></li>
            <li><a href="#">人気投稿</a></li>
            <li><a href="#">エンジニアおすすめ商品</a></li>
            <li><a href="#">エンジニアおすすめ記事</a></li>
            <li><a href="#">投稿ページ</a></li>
        </ul>
    </aside>

    <main>
        <!-- formにIDを付与 -->
        <form action="confirm.php" method="POST" id="contact-form">
            <table>
                <tr>
                    <th>お名前</th>
                    <!-- 各入力欄にIDを付与 -->
                    <td><input type="text" name="name" id="name" maxlength="40"></td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td><input type="text" name="companyName" id="companyName" maxlength="40"></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" name="email" id="email" maxlength="40"></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><input type="number" name="age" id="age"></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><textarea name="message" id="message"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="送信">
        </form>
    </main>

    <footer>
        <p>下のボタンを押すとfooterの背景色が変わります。</p>
        <!-- ボタンにIDを付与 -->
        <button type="button" id="color-change-btn">押してみてね！</button>
    </footer>

    <!-- 外部JavaScriptファイルを読み込み -->
    <script src="style.js"></script>
</body>
</html>
