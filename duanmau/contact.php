<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="contact.css">
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
                    <a href="cart.php"><img src="img/Giỏ hàng.png" alt=""></a>
                </section>
            </nav>
        </header>
        <!-- END HEADER -->
        <section class="container mt-5">
            <h2>Bản đồ</h2>
            <section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3466531520116!2d105.8254801744169!3d21.01881118062801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab78644d4d2d%3A0x4f70f2439c4eb55!2zNjMgUC4gxJDDtG5nIEPDoWMsIENo4bujIEThu6thLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1696850820256!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
        </section>
        <section class="container mt-5">
            <section class="row">
                <section class="col-lg-6">
                    <h2>Thông tin cửa hàng</h2>
                    <p>Cửa hàng 1: 13 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    <p>Cửa hàng 2: 15 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    <p>Điện thoại: 078 806 3527</p>
                    <p>Email: likeshoes@gmail.com</p>
                </section>
                <section class="col-lg-6">
                    <h2>Thông tin liên hệ</h2>
                    <form>
                        <section class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn">
                        </section>
                        <section class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email">
                        </section>
                        <section class="form-group">
                            <label for="message">Tin nhắn</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Nhập tin nhắn của bạn"></textarea>
                        </section><br>
                        <button type="submit">Gửi</button>
                    </form>
                </section>
            </section>
        </section>
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
