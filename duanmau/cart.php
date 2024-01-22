<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <?php
        if(isset($_COOKIE['user'])){

    ?>
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
                <a href="home.php"><img src="img/Logo asm.png"  width="150px" height="150px" style="margin-left: 40px;"></a>
                <section class="home">
                    <a href="dangki.php">Đăng ký</a>
                    <a href="dangnhap.php">Đăng nhập</a>
                    <a href="#"><img src="img/Search.png" alt=""></a>
                    <a href=""><img src="img/Giỏ hàng.png" alt=""></a>
                </section>
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- MAIN -->
        <main>
            <!--END CHI TIẾT ĐƠN HÀNG-->
            <!--SẢN PHẨM KHÁC-->
            <section class="other">
                <section class="title">
                    <h1>Các sản phẩm khác của shop</h1>
                </section>
                <section class="row d-flex justify-content-center">
                    <!--SẢN PHẨM 1-->
                    <section class="boxsp box-sp1">
                        <section class="layer">
                            <img src="img/nike air max.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">NIKE AIR MAX</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 2-->
                    <section class="boxsp box-sp2">
                        <section class="layer">
                            <img src="img/nike sb dunk low.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">NIKE SB DUNK LOW</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 3-->
                    <section class="boxsp box-sp3">
                        <section class="layer">
                            <img src="img/nike air force 1 hoa cúc.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">NIKE AIR FORCE 1 HOA CÚC</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 4-->
                    <section class="boxsp box-sp4">
                        <section class="layer">
                            <img src="img/adidas yeezy 350.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">ADIDAS YEEZY 350</div>
                        <button>MUA NGAY</button>
                    </section>
                </section>
            </section>
            <!--END SẢN PHẨM KHÁC-->
        </main>
        <!-- END MAIN -->
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
    <?php
            }else{
                header('Location: dangnhap.php');
            }
    ?>
</body>
</html>