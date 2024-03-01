<style>
    main>h2 {
        color: red;
        text-transform: uppercase;
        font-size: 25px;
        margin-bottom: 30px;
    }

    main img {
        width: 400px;
        height: 400px;
        margin-left: 300px;
    }

    main p {
        font-size: 20px;
        width: 700px;
        margin: 20px auto;
    }

    .center {
        margin-top: 50px;
        margin-left: 250px;
        border: 1px solid gray;
        border-radius: 3px;
        width: 500px;
    }

    .center h2 {
        text-align: left;
        margin-left: 100px;
    }

    .center ul {
        margin-left: 100px;
        margin-top: 50px;
        text-align: left;
    }

    .center li {
        margin-top: 20px;

    }

    .center a {
        font-size: 20px;
        text-decoration: none;
        color: black;
    }

    .center a:hover {
        color: red;
        text-decoration: underline;
    }

    main {
        text-align: center;
    }

    main input {
        width: 600px;
        padding: 5px 15px;
        margin: 10px;

    }
</style>

<div class="rowmb">
    <div class="boxtrai">
        <main>
            <h2>CẬP NHẬT TÀI KHOẢN</h2>
            <?php
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <input type="email" name="email" placeholder="Email" value="<?=$email?>">
                <input type="text" name="user" placeholder="Tên người dùng" value="<?=$user?>">
                <input type="password" name="pass" placeholder="Mật khẩu" value="<?=$pass?>"><br>
                <input type="text" name="address" placeholder="Địa chỉ" value="<?=$address?>"><br>
                <input type="text" name="tel" placeholder="Điện thoại" value="<?=$tel?>"><br>

                <input type="hidden" name="id" value="<?=$id?>">
                <input style="width: 100px;background-color: black; color: white;" type="submit" value="CẬP NHẬT" name="capnhat">
                <input style="width: 100px;background-color: black; color: white;" type="reset" value="Nhập lại">
            </form>
            <h2 style="color: red;">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </main>
    </div>
    <div class="boxphai">
        <?php
            include "view/boxright.php";
        ?>
    </div>
</div>