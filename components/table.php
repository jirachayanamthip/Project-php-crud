<div>
    <h2>รายการสินค้า</h2>
    <?php
    include 'components/search.php';
    ?>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ไอดี</th>
            <th>ชื่อ</th>
            <th>รูปภาพ</th>
            <th>หมวดหมู่</th>
            <th>คำอธิบาย</th>
            <th>ราคา</th>
            <th>คลัง</th>
            <th>วันที่สร้าง</th>
            <th>อัพเดทเมื่อ</th>
            <th>ดำเนินการ</th>
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
                        <a href='update.php?id={$row['id']}'>แก้ไข</a>
                        <a href='delete.php?id={$row['id']}'>ลบ</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>ไม่มีข้อมูลสินค้า</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>