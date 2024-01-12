<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をアップロード</title>
        <!--CSS読み込み-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--JavaScript読み込み-->
    <script src="js/script.js"></script>
        <meta name="description" content="音楽ファイルをアップロードします。">
    </head>
    <body onload="load()">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    アップロードする音楽ファイルを選択する:

    <div class="select">
    <input type="file" name="file" id="file1"  accept=".mp3,.m4a,.aac,.wav,.flac">
    <a><label for="file1" id="audioInput"></label></a>
    <input type="submit" name="submit" value="Upload">
    </div>
    </form>
    <div>
    <?php
    include 'dbConfig.php';

    $query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");

    if ($query->rowCount() > 0) {
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $mp3URL = 'uploads/' . $row["file_name"];
            echo $mp3URL;
            echo '<source id="audioSource" src="musics/' . $mp3URL . '" type="audio/mp3">';

        echo '<div class="select">
        <button onclick="play()" class="btn active">再生</button>';
        echo '<button onclick="loop()" class="btn active2">連続再生</button>';
        echo '<button onclick="stopp()" class="btn active3">一時停止</button>';
        echo '<button onclick="stopp2()" class="btn active4">停止＆再生時間リセット</button><br></div>';
        }
    } else {
        // 画像が見つからない場合の処理
        echo '<p>画像が見つからず表示されません..</p>';
    }
    ?>
    </div>
    </body>
</html>