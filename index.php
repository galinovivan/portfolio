<!DOCTYPE html>
<html>
<?php
require ('header.php');
?>
<body>
<main>
    <div class="page_wrapper">
        <div class="container-fluid">
            <?php 
            require ('sidebar.php');
            ?>

            <div class="col-md-8" id="content">
                <div class="row block_nav">
                     <div class="col-md-6 nav_item">
                       <a href="#">
                        <div class="cat_title">
                        <p>
                            Обо мне 
                        </p>
                            </div>
                            <img src="img/cat_2.jpg" alt="some img">
                            </a>
                    </div>
                    <div class="col-md-6 nav_item">
                       <a href="#">
                        <div class="cat_title">
                        <p>
                            Мой опыт
                        </p>
                            </div>
                            <img src="img/cat_1.jpg" alt="some img">
                            </a>
                    </div>
                    <div class="col-md-6 nav_item">
                    <a href="#">
                        <div class="cat_title">
                         
                        <p> 
                            Мои услуги
                        </p>
                            </div>
                            <img src="img/cat_2.jpg" alt="some img">
                            </a>
                    </div>
                    <div class="col-md-6 nav_item">
                    <a href="#">
                        <div class="cat_title">
                        <p>
                        Последние работы
                            </p>
                            </div>
                            <img src="img/cat_3.jpg" alt="some img">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/preload.js"></script>
</body>
</html>
