<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .thumbnail img{
                height: 200px !important;
                max-width: 95% !important;
            }
        </style>
    </head>
    <body>

        <div class="row">
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail text-center">
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                    </a>
                    <div class="caption text-left">
                        <h3>$<?= number_format($don_gia, 2)?></h3>
                        <p><?=$ten_hh?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </body>
</html>
