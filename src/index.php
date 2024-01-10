<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>画像をアップロード</title>
        <meta name="description" content="画像ファイルをアップロードします。">
    </head>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    アップロードする画像ファイルを選択する:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    </form>
    <div>
    <?php
    // データベース設定ファイルを含む
    include 'dbConfig.php';

    // データベースから画像を取得する
    $query = $pdo->query("SELECT * FROM images ORDER BY uploaded_on DESC");

    if ($query->rowCount() > 0) {
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $imageURL = 'uploads/' . $row["file_name"];
            // 画像を表示するコード
            echo '<img src="' . $imageURL . '" alt="" />';
        }
    } else {
        // 画像が見つからない場合の処理
        echo '<p>画像が見つからず表示されません..</p>';
    }
    ?>
    </div>
    </body>
</html>