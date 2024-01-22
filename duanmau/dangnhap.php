<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="dangki.css">
</head>
<style>
    span{
        color: red;
    }
</style>
<?php
include 'connect.php';

$sql = "SELECT * FROM validate";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$err = [];
    if (isset($_POST['btnsubmit'])) {
        $user = $_POST['user'];
        $pw = $_POST['pw'];

        if (empty($user)) {
            $err['user'] = "Hãy nhập tên người dùng";
        }
        if (empty($pw)) {
            $err['pw'] = "Hãy nhập mật khẩu";
        }else{
            $err['pw'] = "";
        }
        if (empty(array_filter($err))){
            $check = false;
            foreach ($rows as $row) {
                if ($row['user'] == $user && $row['pw'] == $pw){
                    $check = true;
                    break;  
                }
            }
            if ($check) {
                echo '<script>alert("Đăng nhập thành công")</script>';
                setcookie('user',$user, time() +3600);
                header('LOCATION: product.php');
            } else {
                echo '<script>alert("Tài khoản không đúng . Hãy nhập lại")</script>';
            }
        }
    }
    ?>
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
        <section class="row">
            <section class="col-lg-6">
                <section class="register">
                    <h2>Đăng nhập</h2>
                    
                    <br>
                    <button class="btn"><img src="img/facebook.png" alt="" width="30px"></button>
                    <button class="btn"><img src="img/instagram.png" alt="" width="30px"></button>
                    <button class="btn"><img src="img/google.png" alt="" width="30px"></button>
                    <br>
                </section>
                <form action="" method="post">
                    <section class="form-group">
                        <input type="text" class="form-control" id="name" name="user" placeholder="Tên đăng nhập">
                        <span><?php echo (isset($err['user'])) ? $err['user'] : ""; ?></span>
                        <br>
                        <input type="password" class="form-control" id="password" name="pw" placeholder="Mật khẩu">
                        <span><?php echo (isset($err['pw'])) ? $err['pw'] : ""; ?></span>
                    </section>
                    <br>
                    <a href="#">Quên mật khẩu?</a>
                    <br><br>
                    <a href="dangki.php">Chưa có tài khoản? Đăng ký ngay</a>
                    <br><br>
                    <section class="form-group">
                        <input type="checkbox" name="" id="">&emsp;Nhớ mật khẩu
                    </section>
                    <br>
                    <button type="submit" class="btn btn-primary btnn" name="btnsubmit">Đăng nhập</button>
                </form>
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
</body>
</html>
