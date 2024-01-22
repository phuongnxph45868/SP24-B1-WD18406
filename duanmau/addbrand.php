<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương hiệu</title>
    <link rel="stylesheet" href="brand.css">
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <nav class="d-flex align-items-center">
                <section class="menu">
                    <a href="home.php"><img src="img/Home.png" alt=""></a>
                    <a href="brand.php">Thương hiệu</a>
                    <a href="product.php">Sản phẩm HOT</a>
                    <a href="contact.php">Liên hệ</a>
                </section>
                <a href="home.php"><img src="img/Logo asm.png" alt=""></a>
                <section class="home">
                    <a href="dangki.php">Đăng ký</a>
                    <a href="dangnhap.php">Đăng nhập</a>
                    <a href="#"><img src="img/Search.png" alt=""></a>
                    <a href="cart.php"><img src="img/Giỏ hàng.png" alt=""></a>
                </section>
            </nav>
        </header>
        <form action="product-add.php" method="post">
  <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
  </div>
  <div class="form-group">
    <label for="description">Mô tả sản phẩm</label>
    <textarea class="form-control" id="description" name="description" placeholder="Mô tả sản phẩm"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Giá sản phẩm</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Giá sản phẩm">
  </div>
  <div class="form-group">
    <label for="quantity">Số lượng sản phẩm</label>
    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Số lượng sản phẩm">
  </div>
  <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
</form>
        <!-- END HEADER -->
        <main class="logo">
        <a href="#"><button class="btn-logo"><img src="img/themsp.png" alt="" width="250px">
        <b style="color: green;">Thêm thương hiệu</b>
        </button></a>
        </main>
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