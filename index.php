<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Главная</title>


<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="css/style.css">


<script src="libs/jquery/jquery-3.1.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://use.fontawesome.com/bf8c20532a.js"></script>


</head>
<body>
<div class="page_preloader">
<div class="spinner">
	<img src="img/ring-alt.svg">
</div>
</div>
<?php require ("sidebar.php"); ?>
<main class="main_content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-6 main_carousel main_left_column full_screen_column">
				<div class="carousel slide" data-interval="2000" data-ride="carousel" id="siteCarousel">
					<div class="carousel-inner">
					<div class="item active hide_text_container">
						<div class="shadow_block"></div>
						<div class="carousel-caption">
								<span class="hide_text">
								Бихевиоризм обнажен. Несомненный интерес представляет
								и тот факт, что океаническое ложе сохраняет соленосный артезианский бассейн.
								Имея такие данные, можно сделать существенный вывод о том,
								что субъект власти отражает конструктивный постиндустриализм.</span>
						</div>
			<div class="img_wrapper">
					<img src="img/site_1.png" alt="site">
				</div>
			</div>
			<div class="item">
				<div class="img_wrapper">
					<img src="img/exp.jpg" alt="site">
				</div>
				</div>
				<a class="carousel-control left" data-slide="prev" href="#siteCarousel">
					<i class="fa fa-angle-left"></i>
				</a>
					<a class="carousel-control right" data-slide="next" href="#siteCarousel">
					<i class="fa fa-angle-right"></i>
					</a>
			</div>
			</div>
		</div>
			<div class="col-xs-12 col-md-6 full_screen_column">
				<div class="row">
					<div class="col-xs-12 col-md-12 main_right_column">
							<a class="img_wrapper" href="#">
									<img src="img/xpp.jpg" alt="Опыт" class="gray_img">
							</a>
					</div>
					<div class="col-xs-12 col-md-12">
							<a class="img_wrapper" href="#">
							<img src="img/exp.jpg" alt="Опыт" class="gray_img">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<script type="text/javascript" src="js/preloader.js"></script>
</body>
</html>
