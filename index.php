<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product CRUD</title>
</head>

<body>
    <?php
    include 'components/table.php';
    ?>
    <p align="center"><a href="logout.php">ออกจากระบบ</a></p>
</body>

</html>