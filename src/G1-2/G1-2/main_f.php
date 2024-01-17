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
    <div>
        <?php
        include '../../dbConfig.php';
        echo $_GET['id'];
        /*$query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");
        if ($query->rowCount() > 0) {
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $mp3URL = $row["file_name"];
                echo $row["file_name"].'<br>';
                echo '<div class="music-container" data-file="' . $mp3URL . '">';
                echo '<source src="uploads/' . $mp3URL . '" type="audio/mp3">';
                echo '<button onclick="play(this)" class="btn active">再生</button>';
                echo '<button onclick="loop(this)" class="btn active2">連続再生</button>';
                echo '<button onclick="stopp()" class="btn active3">一時停止</button>';
                echo '<button onclick="stopp2()" class="btn active4">停止＆再生時間リセット</button><br>';
                echo '</div>';
            }
        } else {
            // ファイルが見つからない場合の処理
            echo '<p>音楽ファイルが見つかりませんでした。</p>';
        }**/
        ?>
    </div>
</body>
</html>
