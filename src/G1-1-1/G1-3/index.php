<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>会員登録</title>
</head>
<body>
    <h1 id="title_name">会員登録</h1>

    <form method="post" action="../G1-4/index.php" id="form_all">


        <!-- メールアドレス -->
        <div class="form-group">
            <label for="email">メールアドレス:</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>

        <!-- メールアドレス確認用 -->
        <div class="form-group">
            <label for="confirmEmail">メールアドレス確認:</label>
            <input type="text" id="confirmEmail" name="confirmEmail" class="form-control" required>
        </div>

        <!-- パスワード -->
        <div class="form-group">
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <!-- パスワード確認用 -->
        <div class="form-group">
            <label for="confirmPassword">パスワード確認:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
        </div>

        <!-- 確認ボタン -->
        <div id="button_control">
            <button type="submit" class="btn-check">確認</button><br>
        </div>

        <!-- 戻るボタン -->
        <div id="button_control">
            <button type="button" onclick="history.back()" class="btn-back">戻る</button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="script.js"></script>
</body>
</html>


