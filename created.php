<?php
include 'sql/connect.php';

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


<h2>Products</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="picture" placeholder="Picture" required>
    <input type="text" name="category" placeholder="Category" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <button type="submit" onclick="alert('Add Product Successful!')">Add Product</button>
</form>