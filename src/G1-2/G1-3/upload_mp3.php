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
        include '../../dbConfig.php';
        /*$query = $pdo->prepare("SELECT * FROM Musicdetail WHERE user_id=? ORDER BY user_id DESC");
        $query->execute([$_SESSION['user_id']]);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<a href='../G1-2/main_f.php ? id=".$row['music_folder']."'>".$row['music_folder']."</a><br />";
        echo "<a href='../G1-2/main_f.php?id=".$row['music_folder']."'>".$row['music_folder']."</a><br />";
        }*/
        $query = $pdo->query("SELECT * FROM Category  ORDER BY categoryID DESC");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<a href='../G1-2/main_f.php?id=".$row['category_name']."'>".$row['category_name']."</a><br />";
        }
        ?>




    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>音楽アップロード</h2>
        アップロードする音楽ファイルを選択してください:<br>
        <input type="file" name="file" id="file1" accept=".mp3">
            <a><label for="file1" id="audioInput"></label></a><br>
            楽曲名　:
            <input type="text" id="mail" name="mail" class="m" placeholder="入力してください" required>
            <br>
            楽曲説明:
            <input type="text" id="mail" name="mail" class="m" placeholder="入力してください" required>
            <br>
            歌詞　　:
            <input type="text" id="mail" name="mail" class="m" placeholder="入力してください" required>
            <br>
            <input type="submit" name="submit" value="Upload">
            <br>
            <button type="button" onclick="history.back()" class="btn-back">戻る</button>
    </form>
    <div>
    </div>


</body>
</html>
