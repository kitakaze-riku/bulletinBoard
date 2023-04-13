<?php
// controller
// 書き込み内容の受け渡し
// 書き込みデータの受け渡し

// フォームの送信ボタンが押された場合
if (isset($_POST['submit'])) {
    // POSTされた値を取得
    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // モデルの呼び出し
    require_once 'model.php';
    save_post($name, $title, $content, $db);
}
