<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>会員ログイン</h1>
    
    <form  action="../../common/php/login.php"  method="post">
        <p>
            <label for="mail">メールアドレス</label><br>
            <div class="box1">
                <input type="text" id="mail" name="mail" class="m" placeholder="入力してください" required>
            </div>
        </p>
        <p>
            <label for="pass">パスワード</label><br>
            <div class="box2">
                <input type="password" id="pass" name="pass" class="p" placeholder="パスワードを入力" required>
            </div>
        </p>
        <button type="submit" class="btn">ログイン</button>
    </form>
    <h2>はじめての方はこちら</h2>
    <h1>新規登録</h1>
</body>
</html>