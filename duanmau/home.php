<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['user'])){

    ?>
    <div class="container">
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
                    <a href="cart.php"><img src="img/Giỏ hàng.png" alt=""></a>
                </section>
            </nav>
        </header>
        <main>
            <div class="banner">
                <img src="img/Banner.jpg" alt="">
            </div>

            <!-- ProDuct -->
            <section class="hot-product">
                <section class="title">
                    <h1 style="color: red;">ĐỪNG BỎ LỠ! <br>
                        SẢN PHẨM HOT
                    </h1>
                    <button>XEM THÊM</button>
                </section>
                <section class="row d-flex justify-content-center">
                    <!--SẢN PHẨM 1-->
                    <section class="boxsp box-sp1">
                        <section class="layer">
                            <img src="img/converse-removebg-preview.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">CONVERSE 1970s</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 2-->
                    <section class="boxsp box-sp2">
                        <section class="layer">
                            <img src="img/adidas-removebg-preview.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">ADIDAS SUPERSTAR</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 3-->
                    <section class="boxsp box-sp3">
                        <section class="layer">
                            <img src="img/vans-removebg-preview.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">VANS OLD SKOOL</div>
                        <button>MUA NGAY</button>
                    </section>
                    <!--SẢN PHẨM 4-->
                    <section class="boxsp box-sp4">
                        <section class="layer">
                            <img src="img/nike-removebg-preview.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">NIKE AIR FORCE 1</div>
                        <a href="product-details.html"><button>MUA NGAY</button></a>
                    </section>
                </section>
            </section>

            <!-- Brand -->
            <section class="brand">
                <h1>THƯƠNG HIỆU</h1>
                <section class="row d-flex justify-content-center">
                    <!--SẢN PHẨM 1-->
                    <section class="boxsp br-sp1">
                        <section class="layer">
                            <img src="img/converse shoes.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">CONVERSE SHOES</div>
                        <button>XEM THÊM</button>
                    </section>
                    <!--SẢN PHẨM 2-->
                    <section class="boxsp br-sp2">
                        <section class="layer">
                            <img src="img/nike shoes.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">NIKE SHOES</div>
                        <button>XEM THÊM</button>
                    </section>
                    <!--SẢN PHẨM 3-->
                    <section class="boxsp br-sp3">
                        <section class="layer">
                            <img src="img/adidas shoes.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">ADIDAS SHOES</div>
                        <button>XEM THÊM</button>
                    </section>
                    <!--SẢN PHẨM 4-->
                    <section class="boxsp br-sp4">
                        <section class="layer">
                            <img src="img/vans shoes.png" alt="" width="200" height="200">
                        </section>
                        <div class="tensp">VANS SHOES</div>
                        <button>XEM THÊM</button>
                    </section>
                </section>
            </section>
        </main>
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
    </div>
    <?php
            }else{
                header('Location: dangnhap.php');
            }
    ?>
</body>
</html>