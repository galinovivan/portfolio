
<!DOCTYPE html>
        <html>
<head>
    <meta charset="utf-8">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body>
<div class="page_preloader" id="mainPreloader">
    <div class="spinner"></div>
 <!--    <video id="video_bg" autoplay="autoplay" loop="loop">
        <source src="video/star.mp4" type="video/mp4">
        <source src="video/star.ogv" type="video/ogv">
        <source src="video/star.webm" type="video/webm">
    </video> -->
</div>
<main>
    <div class="page_wrapper">
        <div class="container-fluid">
            <?php 
            require ('sidebar.php');
            ?>

            <div class="col-md-8" id="content">
                <div class="row block_nav">
                    <div class="col-md-6 about">
                        <div class="cat_title">
                        <a href="about.php">
                            Обо мне
                        </a>
                            </div>
                    </div>
                    <div class="col-md-6 resume">
                        <div class="cat_title">
                        <a href="#">
                            Мой опыт
                        </a>
                            </div>
                    </div>
                    <div class="col-md-6 portfolio">
                        <div class="cat_title">
                        <a href="#">
                            Мои услуги
                        </a>
                            </div>
                    </div>
                    <div class="col-md-6 contact">
                        <div class="cat_title">
                        <a href="#">
                        Последние работы
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/ajax/script.js"></script>
<script src="js/preload.js"></script>
</body>
</html>
