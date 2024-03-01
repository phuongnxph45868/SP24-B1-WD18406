<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                            extract($_SESSION['user']);
                            $user = $_SESSION['user'];
                        ?>
                        <div class="row mb10">
                            Xin chào <span style="color: red;"><?= $user['user'] ?></span>!
                        </div>
                        <li><a href="index.php?act=quenmk">Quên mật khẩu?</a></li>
                        <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>

                    <?php
                    if ( $role == 1) {
                        ?>
                        <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                        <?php
                    }
                    ?>
                    
                    <li><a href="index.php?act=thoat">Thoát</a></li>
                <?php
                } else {
                ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập <br>
                            <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                            Mật khẩu<br>
                            <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                            <input type="checkbox" name="" id="">Ghi nhớ tài khoản? </div>
                            <div class="row mb10">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                            </div>
                        </form>
                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=dangky">Đăng ký thành viên</a>
                            </li>
                        <?php }?>
                    </div>
               </div>
               <div class="row mb">   
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                        <input style="width: 80%;margin-top: -1px; padding: 10px 15px;" type="text" name="kyw" required>
                        <input type="submit" name="timkiem" value="Tìm" style="width: 20%;margin-left: -5px; padding: 10px;">
                        </form>
                    </div>
                    </div>
               
               <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                    <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                            }
                        ?>
                    </div>
               </div>
</div>
