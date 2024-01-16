<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像をアップロード</title>
    <!-- CSS読み込み -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- JavaScript読み込み -->
    <script src="js/script.js"></script>
    <meta name="description" content="音楽ファイルをアップロードします。">
</head>
<body>
<?php
echo "<a href="."upload_mp3".">新規音楽追加</a><br />";
?>
    <div>
        <?php
        include 'dbConfig.php';
        $query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");

        
        ?>
    </div>
</body>
</html>
