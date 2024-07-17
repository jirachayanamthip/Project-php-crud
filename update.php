<?php
include 'sql/connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $picture = $product['picture'];
    $sql = "UPDATE products SET name='$name', picture='$picture', category='$category', description='$description', price='$price', stock='$stock' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<h2>Edit Product</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
    <input type="text" name="picture" value="<?php echo $product['picture']; ?>" required>
    <img src="images/<?php echo $product['picture']; ?>" width="50">
    <input type="text" name="category" value="<?php echo $product['category']; ?>" required>
    <textarea name="description" required><?php echo $product['description']; ?></textarea>
    <input type="number" name="price" value="<?php echo $product['price']; ?>" required>
    <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required>
    <button type="submit" onclick="alert('Update Product Successful!')">Update Product</button>
</form>