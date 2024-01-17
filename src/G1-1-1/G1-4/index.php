<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>登録情報確認画面</title>
</head>
<body>
<!--<form method="post" action="../G1-5/index.php" id="form_all">-->
    <div id="container">
        <?php
            $email = $_POST['email'];
            $confirmEmail = $_POST['confirmEmail'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];


            $_SESSION['email'] = $email;
            $_SESSION['confirmEmail'] = $confirmEmail;
            $_SESSION['password'] = $password;
            $_SESSION['confirmPassword'] = $confirmPassword;

        

        echo '<p>'.'メールアドレス<p>'.$email.'</p>' ;
        echo '<p>'.'パスワード<p>'.$password.'</p>' ;



        ?>
    </div>
    <!-- 確認ボタン -->
    <div id="button_control">
        <button onclick="location_php()" class="btn-check">登録確定する</button>
    </div>

    <script>
        function location_php() {
            window.location.href = 'registration.php';
        }
    </script>


    <!-- 戻るボタン -->
    <div id="button_control">
        <button type="button" onclick="history.back()" class="btn-back">編集する</button>
    </div>
</body>
</html>