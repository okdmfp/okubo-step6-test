<?php
// contact.phpからのPOSTデータでなければ、入力フォームにリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// POSTされたデータをXSS対策をして変数に格納
$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['companyName'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 確認画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2>お問い合わせフォーム - 確認画面</h2>
    </header>
    
    <main>
        <p>以下の内容でよろしいでしょうか？</p>
        <form action="send.php" method="POST">
            <table>
                <tr>
                    <th>お名前</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>会社名</th>
                    <td><?php echo $companyName; ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><?php echo $age; ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?php echo nl2br($message); ?></td>
                </tr>
            </table>

            <!-- send.phpにデータを引き継ぐための隠しフィールド -->
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="age" value="<?php echo $age; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">

            <input type="submit" value="送信">
        </form>

        <!-- JavaScriptで前のページに戻るボタン -->
        <button type="button" onclick="history.back()">戻る</button>
    </main>
</body>
</html>
