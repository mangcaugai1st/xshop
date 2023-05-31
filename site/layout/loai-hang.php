<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">DANH MỤC</div>
            <div class="list-group">
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<a href='$href' class='list-group-item'>$loai[ten_loai]</a>";
                    }
                ?>
            </div>
            <div class="panel-footer">
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    <input name="keywords" placeholder="Từ khóa tìm kiếm" class="form-control">
                </form>                
            </div>            
        </div>
    </body>
</html>
