<?php
include 'sql/connect.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $picture = $_POST["picture"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $sql = "INSERT INTO products (name, picture, category, description, price, stock) VALUES ('$name', '$picture', '$category', '$description', '$price', '$stock')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<h2>สิ้นต้า</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="ชื่อ" required><br>
    <input type="text" name="picture" placeholder="รูป" required><br>
    <input type="text" name="category" placeholder="หม่วดหมู่" required><br>
    <textarea name="description" placeholder="คำอธิบาย" required></textarea><br>
    <input type="number" name="price" placeholder="ราคา" required><br>
    <input type="number" name="stock" placeholder="คลัง" required><br>
    <button type="submit" onclick="alert('Add Product Successful!')">เพิ่มข้อมูลสินค้า</button>
</form>
<p><a href="index.php">กลับไปหน้าหลัก</a></p>