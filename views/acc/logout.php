<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../public/acc/style.css">
    <title>Đăng xuất</title>
</head>
<body>
    <form action="./../../controllers/acc/logout.php" method="POST">
        <h2>Đăng xuất</h2>
        <p>Xin chào, <?= htmlspecialchars($user['email']) ?>!</p>
        <input type="submit" value="Đăng xuất" />
    </form>
</body>
</html>
