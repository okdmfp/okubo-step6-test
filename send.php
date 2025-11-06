<?php
// confirm.phpからのPOSTリクエストでなければ、入力フォームにリダイレクト
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

// データを受け取り
$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
// ... 他のデータも同様に受け取る ...

// --- ここにメール送信処理を記述 ---
// 例として、常に成功したと仮定します。
$is_success = true;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 送信完了画面</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>お問い合わせフォーム - 送信完了画面</h1>

    <?php if ($is_success): ?>
        <p>お問い合わせが送信されました。ありがとうございます！</p>
    <?php else: ?>
        <p>メールの送信に失敗しました。お手数ですが、再度お試しください。</p>
    <?php endif; ?>

    <a href="contact.php">お問い合わせフォームに戻る</a>

</body>
</html>
