<?php
session_start();

require 'DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 入力されたメールアドレスとパスワードを取得
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    // データベースへの接続を取得
    include '../dbConfig.php';

    try {
        // データベースからユーザー情報を取得
        $stmt = $pdo->prepare("SELECT * FROM User WHERE user_name = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // パスワードの照合
        if ($user && password_verify($pass, $user['password'])) {
            
            // セッションでのユーザ情報の保存
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['personal_mail_address']=$user['mail_address'];//メールアドレス
            //電話番号、メールアドレスもセッションに保存する修正中


            // ログイン後の遷移先にリダイレクト
            header('Location: ../../G1-2/index.php');
            exit();
        } else {
            // ログイン失敗時の処理
            echo "メールアドレスまたはパスワードが正しくありません。";
        }
    } catch (PDOException $e) {
        die("データベースエラー: " . $e->getMessage());
    }
}
?>
