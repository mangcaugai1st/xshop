<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="panel panel-default nn-panel-login">
            <div class="panel-heading">TÀI KHOẢN</div>
            <div class="panel-body">
<form action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
    <div class="form-group">
        <div>Tên đăng nhập</div>
        <input name="ma_kh" class="form-control" value="<?=$ma_kh?>">
    </div>
    <div class="form-group">
        <div>Mật khẩu</div>
        <input name="mat_khau" type="password" class="form-control" value="<?=$mat_khau?>">
    </div>
    <div class="form-group">
        <div class="form-control">
            <label class="checkbox-inline">
                <input name="ghi_nho" type="checkbox" checked>
                Ghi nhớ tài khoản?
            </label>
        </div>
    </div>
    <div class="form-group">
        <button name="btn_login" class="btn btn-default">Đăng nhập</button>
    </div>
    <div class="form-group">
        <li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
        <li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
    </div>
</form>        
            </div>
        </div>        

    </body>
</html>
