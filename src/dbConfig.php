<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
// データベース接続の構築
try {
    $pdo = new PDO('mysql:host=mysql218.phy.lolipop.lan;dbname=LAA1517438-test;charset=utf8', 'LAA1517438', 'Pass0607');
} catch (PDOException $e) {
    die("接続に失敗しました: " . $e->getMessage());
}
?>