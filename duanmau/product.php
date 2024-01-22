<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm hot</title>
    <link rel="stylesheet" href="product.css">
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <nav class="d-flex align-items-center">
                <section class="menu">
                    <a href="home.php"><img src="img/Home.png"></a>
                    <a href="brand.php">Thương hiệu</a>
                    <a href="product.php">Sản phẩm HOT</a>
                    <a href="contact.php">Liên hệ</a>
                </section>
                <a href="home.php"><img src="img/Logo asm.png" width="150px" height="150px" style="margin-left: 40px;"></a>
                <section class="home">
                    <a href="dangki.php">Đăng ký</a>
                    <a href="dangnhap.php">Đăng nhập</a>
                    <a href="#"><img src="img/Search.png" alt=""></a>
                    <a href="cart.php"><img src="img/Giỏ hàng.png" alt=""></a>
                </section>
            </nav>
        </header>
        <!-- END HEADER -->

        <?php
        if (isset($_COOKIE['user'])) {

            include 'connect.php';

            $products_per_page = 3;

            // Calculate total number of products
            $total_sql = "SELECT COUNT(*) AS total FROM sanpham";
            $total_stmt = $conn->prepare($total_sql);
            $total_stmt->execute();
            $total_rows = $total_stmt->fetch(PDO::FETCH_ASSOC)['total'];

            // Calculate total pages
            $total_pages = ceil($total_rows / $products_per_page);

            // Determine current page
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the starting point for the products on the current page
            $start_from = ($current_page - 1) * $products_per_page;

            // Retrieve products for the current page
            $sql = "SELECT * FROM `sanpham` LIMIT $start_from, $products_per_page";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

            <h2>Danh sách sản phẩm</h2>
            <div class="row d-flex justify-content-center product">
                <?php
                foreach ($rows as $item) {
                ?>
                    <!-- SẢN PHẨM -->
                    <section class="boxsp box-sp">
                        <section class="layer">
                            <img src="img/products/<?php echo $item['images']; ?>" width="200" height="200">
                        </section>
                        <div style="margin: 7px 40px;" class="tensp"><?php echo $item['name']; ?></div>
                        <span class="gia"><?php echo $item['price']; ?></span>
                        <button class="btn">MUA NGAY</button><br>
                        <a href="suasp.php?id=<?php echo $item['id']; ?>">Sửa sản phẩm</a> |<a href="xoa.php?id=<?php echo $item['id'];?>" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này')"">Xóa</a>
                        
                    </section>
                <?php
                }
                ?>
            </div>

            <!-- Pagination -->
            <ul class="page">
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    $active_class = ($i == $current_page) ? 'class="active"' : '';
                    echo "<li><a $active_class href='?page=$i'>$i</a></li>";
                }
                ?>
            </ul>
            <br>
            <a href="themsp.php">Thêm sản phẩm</a>
        <?php
        } else {
            header('Location: dangnhap.php');
        }
        ?>

        <!-- FOOTER -->
        <footer>
            <section class="con">
                <section class="row">
                    <section class="footer-col">
                        <h4>Thông tin liên hệ</h4>
                        <ul>
                            <li><a href="#">Điện thoại: 078 806 3527 </a></li>
                            <li><a href="#">Email: likeshoes@gmail.com</a></li>
                        </ul>
                    </section>
                    <section class="footer-col">
                        <h4>Thương hiệu</h4>
                        <ul>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Converse</a></li>
                            <li><a href="#">Vans</a></li>
                        </ul>
                    </section>
                    <section class="footer-col">
                        <h4>Hệ thống cửa hàng</h4>
                        <ul>
                            <li><a href="#">Cửa hàng 1: 13 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</a></li>
                            <li><a href="#">Cửa hàng 2: 15 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</a></li>
                        </ul>
                    </section>
                    <section class="footer-col">
                        <h4>Theo dõi chúng tôi</h4>
                        <section class="social-links">
                            <a href="#"><img src="img/facebook.png" alt="" width="30px"></a>
                            <a href="#"><img src="img/instagram.png" alt="" width="30px"></a>
                            <a href="#"><img src="img/tiktok.png" alt="" width="30px"></a>
                        </section>
                        <img src="img/icon bct.png" alt="">
                    </section>
                </section>
            </section>
        </footer>
        <!-- END FOOTER -->
    </div>
</body>

</html>
