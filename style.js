// style.js

document.addEventListener('DOMContentLoaded', function() {

    // ----------- フォーム入力チェック機能 -----------
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            
            // 必須項目（会社名を除く）の値を取得
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const age = document.getElementById('age').value;
            const message = document.getElementById('message').value;

            // 未入力チェック
            if (name.trim() === '' || email.trim() === '' || age.trim() === '' || message.trim() === '') {
                alert('必須項目が未入力です。入力内容をご確認ください。');
                event.preventDefault(); // 送信を中止
                return;
            }

            // 確認ダイアログのメッセージを作成
            const confirmMessage = `下記の内容を本当に送信しますか？\n\n` +
                                 `お名前: ${name}\n` +
                                 `メールアドレス: ${email}\n` +
                                 `年齢: ${age}\n` +
                                 `お問い合わせ内容: ${message}`;
            
            // 確認ダイアログで「キャンセル」が押されたら送信を中止
            if (!confirm(confirmMessage)) {
                event.preventDefault();
            }
        });
    }

    // ----------- フッター背景色変更機能 -----------
    const colorButton = document.getElementById('color-change-btn');
    const footer = document.querySelector('footer');

    if (colorButton && footer) {
        const colors = ['blue', 'red', 'yellow', 'gray'];
        let currentIndex = -1; // 初期状態（色なし）

        colorButton.addEventListener('click', function() {
            // 配列の次の色を取得（剰余演算子でループ）
            currentIndex = (currentIndex + 1) % colors.length;
            // フッターの背景色を変更
            footer.style.backgroundColor = colors[currentIndex];
        });
    }
});
