<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
</head>

<body>
    <h2>Sửa Sản Phẩm</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <?php
            include 'connect.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM `sanpham` WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //lấy tất cả dữ liệu trả về dưới dạng mảng liên hợp
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            if (isset($_POST['sua'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $images = $_FILES['file'];
                $nameimg = $images['name'];
                if (empty($nameimg)) {
                    $sql = "UPDATE `sanpham` SET `images`='$images',
                                                  `name`='$name',
                                                  `price`='$price' WHERE id=$id";
                } else {
                    $sql = "UPDATE `sanpham` SET `images`='$nameimg',
                    `name`='$name',
                    `price`='$price' WHERE id=$id";
                }
                move_uploaded_file($images['tmp_name'], '/img/product/' . $nameimg);
                $conn->exec($sql);
                echo "<script>alert('Sửa sản phẩm thành công')</script>";
                echo "<script>window.location.href = '../sanpham/sp.php'</script>";
            }
            ?>
            <!--             
                header('Location: product.php');
                exit;
            }
            ?> -->
        </div>
        <img src="img/products/<?php echo $rows['images'] ?>">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" value="<?php echo $rows['name']; ?>" required>

        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" value="<?php echo $rows['price']; ?>" required>

        <button type="submit">Lưu Sửa Đổi</button>
    </form>
</body>

</html>