<div>
    <h2>Product List</h2>
    <?php
    include 'components/search.php';
    ?>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Create Date</th>
            <th>Update Date</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'sql/connect.php';
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $sql = "SELECT * FROM products WHERE name LIKE '%$search%' OR category LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td><img src='images/{$row['picture']}' width='50'></td>
                    <td>{$row['category']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['stock']}</td>
                    <td>{$row['create_date']}</td>
                    <td>{$row['update_date']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Edit</a>
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No products found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>