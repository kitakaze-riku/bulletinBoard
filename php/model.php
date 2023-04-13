<?php
// model
// 書き込みの保存
// 書き込みデータの取得
// データベースに接続
require_once './dbConnect.php';

function save_post($name, $title, $content, $db)
{
    try {
        // echo $name;
        // データベースに値を保存
        $stmt = $db->prepare('INSERT INTO posts (name, title, content,posts_deleted) VALUES (?, ?, ?,?)');
        $stmt->execute([$name, $title, $content, 0]);
        // echo "接続OK！";


        loading_data($db);

        $redirect_url = "/bulletinBoard/php";
        header("Location: " . $redirect_url);
        exit;
    } catch (PDOException $e) {
        // エラーが発生した場合はエラーメッセージを表示
        echo "接続エラー: " . $e->getMessage();
        exit;
    }
}

function loading_data($db)
{
    // テーブルデータを取得
    $stmt = $db->query('SELECT * FROM posts');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 取得したデータを表示
    // foreach ($results as $row) {
    //     echo $row['name'] . ', ' . $row['title'] . ', ' . $row['content'] . ',' . $row['post_registration_date'] . '<br>';
    // }
    return $results;

    exit;
}
