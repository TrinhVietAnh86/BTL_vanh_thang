<?php
require_once '../config/connect.php';

$email = 'user@example.com';
$password = '123456';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->execute([$email, $hashedPassword]);

echo "Tạo tài khoản thành công.";
?>
