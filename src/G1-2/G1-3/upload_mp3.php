<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像をアップロード</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <!-- CSS読み込み -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- JavaScript読み込み -->
    <script src="js/script.js"></script>
    <meta name="description" content="音楽ファイルをアップロードします。">
</head>
<body>
        
        <?php
        /**include '../../dbConfig.php';
        $query = $pdo->query("SELECT * FROM Category  ORDER BY categoryID ASC");
        $categoryArray=array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $categoryArray[]=array(
            'category'=>$row['category_name']
        );
        }
        **/
        ?>


    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>音楽アップロード</h2>
        アップロードする音楽ファイルを選択してください:<br>
        <input type="file" name="file" id="file1" accept=".mp3">
            <a><label for="file1" id="audioInput"></label></a><br>
            (＊同一フォルダ内に同じ名前のファイルが存在する場合、上記で選択したファイルに上書きされるのでご注意ください)<br>
            楽曲名　:
            <input type="text"  name="musicname"  placeholder="入力してください" required>
            <br>
            楽曲説明:
            <input type="text"  name="musicdetail" placeholder="入力してください" required>
            <br>
            歌詞　　:
            <input type="text"  name="lyrics" placeholder="入力してください" required>
            <br>

            カテゴリを選択:
            <select id="selectBox" name="selectBox" onchange="toggleTextBox()">
            <?php
            include '../../dbConfig.php';
            $query = $pdo->query("SELECT * FROM Category  ORDER BY categoryID ASC");
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$row['categoryID']."'>".$row['category_name']."</option>";
            }
            ?>
            </select>
            <br>
            <div id="textBox">
            カテゴリ名入力:
            <input type="text" id="inputText" name="inputText" class="hidden">
            </div>
            <br>


            フォルダを選択:
            <select id="selectfolder" name="selectfolder" onchange="folder()">
            <?php
            $query = $pdo->query("SELECT DISTINCT music_folder FROM Musicdetail ");
            echo "<option value='フォルダ新規作成'>フォルダ新規作成</option>";
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$row['music_folder']."'>".$row['music_folder']."</option>";
            }
            ?>
            </select>
            <br>
            <div id="folders">
            フォルダ名入力:
            <input type="text" id="inputfolder" name="inputfolder" class="hidden"><br>
            (＊同じ名前のフォルダは作成できません。すでに存在している場合はそのフォルダに統合されます。)
            </div>
            <br>
            <input type="submit" name="submit" value="Upload">
            <br>
            <button type="button" onclick="history.back()" class="btn-back">戻る</button>
    </form>
    <div>
    </div>

    <script>
    document.getElementById("inputText").classList.remove("hidden");
    document.getElementById("inputfolder").classList.remove("hidden");

    function toggleTextBox() {
        var selectBox = document.getElementById("selectBox");
        var textBox = document.getElementById("textBox");
        
        if (selectBox.value === "1") {
            textBox.classList.remove("hidden");
        } else {
            textBox.classList.add("hidden");
        }
    }

    function folder() {
        var selectfolder = document.getElementById("selectfolder");
        var folders = document.getElementById("folders");
        
        if (selectfolder.value === "フォルダ新規作成") {
            folders.classList.remove("hidden");
        } else {
            folders.classList.add("hidden");
        }
    }
    </script>


</body>
</html>
