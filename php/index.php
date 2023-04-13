<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<!-- view -->
<!-- 書き込み機能と書き込み内容の閲覧 -->

<?php

require_once './dbConnect.php';
$stmt = $db->query('SELECT * FROM posts');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <h1>掲示板</h1>

    <form action="post.php" method="post">
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title">

        <label for="name">名前</label>
        <input type="text" id="name" name="name">

        <label for="content">内容</label>
        <textarea id="content" name="content"></textarea>

        <input type="submit" id="submit" name="submit" value="投稿">
    </form>

    <hr>

    <h2>投稿一覧</h2>

    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>名前</th>
                <th>日時</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row) : ?>
                <tr>
                    <td><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['post_registration_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>