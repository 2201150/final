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
<!--<form method="post" action="../G1-1-6/index.php" id="form_all">-->
    <!-- 入力データを表示 -->
    <div id="container">
        <?php
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $furiganaLastName = $_POST['furiganaLastName'];
            $furiganaFirstName = $_POST['furiganaFirstName'];
            $postalCode = $_POST['postalCode'];
            $prefecture = $_POST['prefecture'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $building = $_POST['building'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $confirmEmail = $_POST['confirmEmail'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            

            $_SESSION['lastName'] = $lastName;
            $_SESSION['firstName'] = $firstName;
            $_SESSION['furiganaLastName'] = $furiganaLastName;
            $_SESSION['furiganaFirstName'] = $furiganaFirstName;
            $_SESSION['postalCode'] = $postalCode;
            $_SESSION['prefecture'] = $prefecture;
            $_SESSION['city'] = $city;
            $_SESSION['street'] = $street;
            $_SESSION['building'] = $building;
            $_SESSION['phoneNumber'] = $phoneNumber;
            $_SESSION['email'] = $email;
            $_SESSION['confirmEmail'] = $confirmEmail;
            $_SESSION['password'] = $password;
            $_SESSION['confirmPassword'] = $confirmPassword;

          
                        
       /* echo '<table>';
        echo '<tr><td align="right">フリガナ:</td><td align="center">'.$furiganaLastName.' '.$furiganaFirstName.'</td></tr>';
        echo '<tr><td align="right">郵便番号:</td><td align="center">'.$postalCode.'</td></tr>';
        echo '<tr><td align="right">住所:</td><td align="center">'.$prefecture.' '.$city.'</td></tr>';
        echo '<tr><td align="right">番地:</td><td align="center">'.$street.'</td></tr>';
        echo '<tr><td align="right">建物名:</td><td align="center">'.$building.'</td></tr>';
        echo '</table>';*/
        echo '<br><p style="margin-bottom: 0;">'.'性： '.$lastName."　　".'名： '.$firstName.'</p>' ;
        
        echo '<table class="table-container">';
        echo '<tr><td align="right">フリガナ:</td><td class="table-cell">'.$furiganaLastName.'　'.$furiganaFirstName.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">郵便番号:</td><td class="table-cell">'.$postalCode.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">住所:</td><td class="table-cell">'.$prefecture.' '.$city.'</td>　　　　<td></td></tr>';
        echo '<tr><td align="right">番地:</td><td class="table-cell">'.$street.'</td><td></td>　　　　</tr>';
        echo '<tr><td align="right">建物名:</td><td class="table-cell">'.$building.'</td><td></td>　　　　</tr>';
        echo '</table>';
        

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
            window.location.href = '../../common/php/registration.php';
        }
    </script>


    <!-- 戻るボタン -->
    <div id="button_control">
        <button type="button" onclick="history.back()" class="btn-back">編集する</button>
    </div>
</body>
</html>