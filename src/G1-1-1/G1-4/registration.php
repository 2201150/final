<?php
session_start();
require(__DIR__ . '/../../dbConfig.php');

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

try {
    // データベースにデータを挿入
    $stmt = $pdo->prepare("
        INSERT INTO USER (
             user_name, pass
        ) VALUES (
            :mail_address, :password
        )
    ");


    // セッション情報を受け取り
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];


    // バインドパラメータの設定
    $stmt->bindParam(':mail_address', $email);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bindParam(':password', $password); // パスワードのハッシュ化


    $stmt->execute();

    // データベース接続を閉じる（適宜修正）
    $pdo = null;

    // セッションを破棄。ログイン時に情報は確保
    session_destroy();

    // 登録が成功したら遷移先にリダイレクト
    header('Location: ../G1-5/index.php');
} catch (PDOException $e) {
    die("データベースエラー: " . $e->getMessage());
}
?>
