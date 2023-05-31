<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .carousel-inner img{
                margin: 0 auto;
                height: 400px !important;
            }
        </style>
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php
                    for ($i = 1;$i < count($items); $i++) {
                        echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
                    }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <?php
                    $active = " active";
                    foreach ($items as $item) {
                ?>
                    <div class="item<?=$active?>">
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>"/>
                        </a>
                        <div class="carousel-caption">
                            <h3>$<?=$item['don_gia']?></h3>
                            <p><?=$item['ten_hh']?></p>
                        </div>
                    </div>                
                <?php
                    $active = "";
                    }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </body>
</html>
