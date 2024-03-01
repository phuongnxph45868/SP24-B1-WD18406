<style>
    .dslh > .title {
        margin-bottom: 30px;
    }

    .dslh > .title > h1 {
        border: 1px solid gray;
        background-color: rgb(187, 173, 173);
        border-radius: 5px;
        padding: 5px 100px;
        font-size: 18px;
    }

    .dslh table th,
    td {
        width: 300px;
        padding: 5px 10px;
        border: 1px solid;
    }

    .dslh table {
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .dslh .button {
        margin-left: 100px;
    }

    .dslh input {
        background-color: white;
        border-radius: 3px;
        padding: 2px 10px;
    }
</style>
<div class="dslh">
    <div class="title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <table>
        <tr>
            <th></th>
            <th>MÃ TÀI KHOẢN</th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU</th>
            <th>EMAIL</th>
            <th>ĐỊA CHỈ</th>
            <th>ĐIỆN THOẠI</th>
            <th>VAI TRÒ</th>
            <th></th>
        </tr>
        <?php
        foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $suatk = "index.php?act=suatk&id=" . $id;
            $xoatk = "index.php?act=xoatk&id=" . $id;

            echo '
                <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>' . $id . '</td>
                <td>' . $user . '</td>
                <td>' . $pass . '</td>
                <td>' . $email . '</td>
                <td>' . $address . '</td>
                <td>' . $tel . '</td>
                <td>' . $role . '</td>
                <td>
                    <a href="' . $suatk . '"><input type="button" value="Sửa"></a>
                    <a href="' . $xoatk . '"><input type="button" value="Xoá"></a>
                </td>
            </tr>';
        }
        ?>
    </table>
    <div class="button">
        <input type="button" value="Chọn tất cả" name="" id="">
        <input type="button" value="Bỏ chọn tất cả" name="" id="">
        <input type="button" value="Xoá các mục đã chọn" name="" id="">
        <input type="button" value="Nhập thêm" name="" id="">
    </div>
</div>
