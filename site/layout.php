<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
        
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet"/>
        
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>
        
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <h1 class="alert alert-success">SIÊU THỊ TRỰC TUYẾN</h1>
            </header>
            <nav class="row">
                <?php require 'layout/menu.php';?>            
            </nav>
            <div class="row">
                <article class="col-sm-9">
                    <div class="row">
                    <?php
                        require $VIEW_NAME;
                    ?>  
                    </div>
                </article>
                <aside class="col-sm-3">
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer class="row"></footer>
        </div>
    </body>
</html>
