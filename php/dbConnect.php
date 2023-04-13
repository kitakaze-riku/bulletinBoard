<?php
// MySQLに接続するための接続情報を定義
$host = 'localhost'; // データベースサーバーのホスト名
$dbname = 'mydb'; // データベース名
$user = 'root'; // ユーザー名
$password = 'root'; // パスワード

// データベースに接続するためのPDOオブジェクトを作成
$db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

// エラーが発生した場合にPDOException例外をスローするように設定
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ここにデータベース接続時に必要な共通処理を書く
// 例えば、文字コードの設定など
