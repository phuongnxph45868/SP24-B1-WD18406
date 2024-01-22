<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $idbrand = $_POST['hang'];
    $images = $_FILES['images'];
    $nameimg = $images['name'];

    $sql = "INSERT INTO `sanpham`(`images`, `name`, `price`, `idbrand`) 
            VALUES (:images, :name, :price, :idbrand)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':idbrand', $idbrand);
    $stmt->bindParam(':images', $nameimg);

    $stmt->execute();

    if ($images['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'img/products/';
        $uploadPath = $uploadDir . basename($nameimg);

        move_uploaded_file($images['tmp_name'], $uploadPath);
    } else {
        echo 'File upload failed with error code ' . $images['error'];
    }

    header('Location: product.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>

<body>
    <h2>Thêm Sản Phẩm Mới</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" required>

        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" required>

        <div>
            <label for="hang">Chọn hãng:</label>
            <select name="hang" id="hang">
                <?php
                $sql = "SELECT * FROM brand";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($rows as $item) {
                ?>
                    <option value="<?php echo $item['idbrand']; ?>"><?php echo $item['name']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <label for="images">Ảnh sản phẩm:</label>
        <input type="file" id="images" name="images" required>

        <button type="submit">Thêm Sản Phẩm</button>
    </form>
</body>

</html>
