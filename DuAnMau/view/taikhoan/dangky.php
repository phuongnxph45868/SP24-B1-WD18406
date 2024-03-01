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
    main{
        text-align: center;
    }
    main input{
        width: 600px;
        padding: 5px 15px;
        margin: 10px;

    }
</style>

<div class="rowmb">
    <div class="boxtrai">
        <main>
          <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
          <form action="index.php?act=dangky" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="user" placeholder="Tên người dùng">
            <input type="password" name="pass" placeholder="Mật khẩu">
            <input type="text" name="address" placeholder="Địa chỉ">
            <input type="text" name="tel" placeholder="Điện thoại"><br>
            <input style="width: 100px;background-color: black; color: white;" type="submit" value="Đăng ký" name="dangky">
            <input style="width: 100px;background-color: black; color: white;" type="reset" value="Nhập lại">
          </form>
          <h2 style="color: red;">
          <?php
          if(isset($thongbao)&&($thongbao!="")){
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
