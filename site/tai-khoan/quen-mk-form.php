<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-danger">QUÊN MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input name="email" class="form-control">
            </div>
            <div class="form-group">
                <button name="btn_forgot" class="btn btn-default">Tìm lại mật khẩu</button>
            </div>
        </form>
    </body>
</html>
