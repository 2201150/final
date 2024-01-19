<?php
session_start();
?>
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
echo "<a href="."../G1-3/upload_mp3".">新規音楽追加</a><br />";
?>
    <div>
        <?php
        include '../../dbConfig.php';
        $query = $pdo->prepare("SELECT DISTINCT music_folder FROM Musicdetail WHERE user_id=? ORDER BY user_id DESC");
        $query->execute([$_SESSION['user_id']]);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        /*echo "<a href='../G1-2/main_f.php ? id=".$row['music_folder']."'>".$row['music_folder']."</a><br />";*/
        echo "<a href='../G1-2/main_f.php?id=".$row['music_folder']."'>".$row['music_folder']."</a><br />";

}
        ?>
    </div>
</body>
</html>
