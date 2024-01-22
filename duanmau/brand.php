<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương hiệu</title>
    <link rel="stylesheet" href="brand.css">
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
        <!-- ASIDE -->
        <section class="logo">
            <a href="#"><button class="btn-logo"><img src="img/nike logo.png" alt="" width="250px"></button></a>
            <a href="#"><button class="btn-logo"><img src="img/adidas logo.png" alt="" width="250px"></button></a>
            <a href="#"><button class="btn-logo"><img src="img/vans logo.png" alt="" width="250px"></button></a>
            <a href="#"><button class="btn-logo"><img src="img/converse logo.png" alt="" width="250px"></button></a>
        </section>
        <aside>
            <h4>LỌC THEO KÍCH THƯỚC</h4>
            <section class="size">
                <button>36</button>
                <button>37</button>
                <button>38</button>
                <button>39</button>
                <button>40</button>
                <button>41</button>
                <button>42</button>
                <button>43</button>
                <button>44</button>
                <button>45</button>
            </section>
            <h4>LỌC THEO GIÁ</h4>
            <form action="">
                <input type="checkbox" name="" id=""> &emsp; 0đ - 500.000đ <br>
                <input type="checkbox" name="" id=""> &emsp; 500.000đ - 1.000.000đ <br>
                <input type="checkbox" name="" id=""> &emsp; 1.000.000đ - 2.000.000đ <br>
                <input type="checkbox" name="" id=""> &emsp; 2.000.000đ - 3.000.000đ <br>
                <input type="checkbox" name="" id=""> &emsp; 3.000.000đ - 4.000.000đ
            </form>
        </aside>
        <!-- END ASIDE -->
        <!-- MAIN -->
        <main>
            <section class="video-ad">
                <video src="vid/X2Download.app-Quảng cáo 3D OOH của Nike Air Max Day gây sốt tại Nhật Bản.mp4" width="100%" autoplay muted controls loop preload="auto">Your browser is not working</video>
            </section>
            <section class="row d-flex justify-content-center product">
                <!--SẢN PHẨM 1-->
                <section class="boxsp box-sp1">
                    <section class="layer">
                        <img src="img/nike-removebg-preview.png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">NIKE AIR FORCE 1</div>
                    <span class="gia">2.929.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 2-->
                <section class="boxsp box-sp2">
                    <section class="layer">
                        <img src="img/image-removebg-preview.png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">NIKE COURT VISION</div>
                    <span class="gia">1.900.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 3-->
                <section class="boxsp box-sp3">
                    <section class="layer">
                        <img src="img/image-removebg-preview (1).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">NIKE DUNK LOW</div>
                    <span class="gia">2.929.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
            </section>
            <section class="row d-flex justify-content-center product">
                <!--SẢN PHẨM 4-->
                <section class="boxsp box-sp4">
                    <section class="layer">
                        <img src="img/image-removebg-preview (2).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">ADIDAS NMD R1</div>
                    <span class="gia">3.900.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 5-->
                <section class="boxsp box-sp2">
                    <section class="layer">
                        <img src="img/image-removebg-preview (3).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">ADIDAS FORUM LOW</div>
                    <span class="gia">2.600.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 6-->
                <section class="boxsp box-sp3">
                    <section class="layer">
                        <img src="img/image-removebg-preview (4).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">ADIDAS SAMBA OG</div>
                    <span class="gia">2.700.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
            </section>
            <section class="row d-flex justify-content-center product">
                <!--SẢN PHẨM 7-->
                <section class="boxsp box-sp1">
                    <section class="layer">
                        <img src="img/converse-removebg-preview.png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">CONVERSE 1970s</div>
                    <span class="gia">2.000.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 8-->
                <section class="boxsp box-sp5">
                    <section class="layer">
                        <img src="img/image-removebg-preview (5).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">VANS SLIP ON</div>
                    <span class="gia">1.450.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
                <!--SẢN PHẨM 9-->
                <section class="boxsp box-sp3">
                    <section class="layer">
                        <img src="img/image-removebg-preview (6).png" alt="" width="200" height="200">
                    </section>
                    <div class="tensp">VANS AUTHENTIC</div>
                    <span class="gia">1.550.000đ</span>
                    <button class="btn">MUA NGAY</button>
                </section>
            </section>
            <section class="next">
                <button class="btn-next">Trước</button>
                <button class="btn-next">1</button>
                <button class="btn-next">2</button>
                <button class="btn-next">3</button>
                <span>...</span>
                <button class="btn-next">10</button>
                <button class="btn-next">Sau</button>
            </section>
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