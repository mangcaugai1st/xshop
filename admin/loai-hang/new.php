<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Mã loại</label>
                <input name="ma_loai" value="auto number" class="form-control" readonly>
            </div>
            
            <div class="form-group">
                <label>Tên loại</label>
                <input name="ten_loai" class="form-control">
            </div>
            <div class="form-group">
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </form>
    </body>
</html>
