<?php
// model.phpで作成された$resultsを受け取る
$results = $results;
// 配列をオブジェクトに変換
$obj = (object) $results[0];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>投稿詳細</h1>

    <div class="post-details">
        <span>投稿ID<?php echo $obj->id; ?></span><span><?php echo $obj->post_registration_date; ?></span>
        <h2><?php echo $obj->title; ?></h2>
        <p><?php echo $obj->name; ?></p>
        <p><?php echo $obj->content; ?></p>

        <form action="reply.php" method="post">
            <label for="reply">返信</label>
            <textarea id="reply" name="reply"></textarea>

            <input type="submit" id="submit" name="submit" value="送信">
        </form>
    </div>

</body>

</html>