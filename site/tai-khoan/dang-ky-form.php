<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-danger">ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control" value="<?=$ma_kh?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" class="form-control" value="<?=$mat_khau?>">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input name="mat_khau2" type="password" class="form-control" value="<?=$mat_khau2?>">
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input name="ho_ten" class="form-control" value="<?=$ho_ten?>">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input name="email" class="form-control" value="<?=$email?>">
            </div>
            <div class="form-group">
                <label>Hình</label>
                <input name="up_hinh" class="form-control" type="file">
            </div>
            <div class="form-group">
                <button name="btn_register" class="btn btn-default">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </body>
</html>
