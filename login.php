<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2 align="center">เข้าสู่ระบบ</h2>
    <form method="POST" action="login.php">
        <div align="center">
            <label>ชื่อผู้ใช้:</label>
            <input type="text" name="username" required><br><br>
            <label>รหัสผ่าน:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="เข้าสู่ระบบ">
        </div>
    </form>
</body>
</html>

<?php
include 'sql/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];



    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "<p align='center' style='color:red;'>Invalid username or password</p>";
    }
}
$conn->close();
?>
