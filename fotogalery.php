<?php
session_start();
include ("reg/bd.php");
include("admin/dostup.php"); // при успешной авторизации администратора открыть доступ к администрации
?>
<!DOCTYPE html>
<html>

<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="images/logo.jpg">
	<link rel="stylesheet" href="style/style.css" media="all">
	<link rel="stylesheet" href="style/styleFoto.css" media="all">
	<!--<<script type="text/javascript" src="js/scr.js"></script>-->
	<!--<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>-->
	
	<script type="text/javascript" src="js/jquery.magnifier.js"></script>
	
</head>
<body>
	<div class="header">
		<div class="mid">
			<header>
				<div class="topmenu" style="font: 16px/24px Arial; margin:15px; padding: 0;">
					<aside>
						<a href="../index.php">Главная</a>
						<a href="../biografiya.php">Биография</a>
						<a href="../fotogalery.php">Фотогалерея</a>
						<a href="../obomne.php">Обо мне</a>
						<a href="../portfolio.php">Портфолио</a>
						<?php
		if($_SESSION['admin_true']==true){
		echo'<a href="admin/admin.php">Админка</a>';
		}
?>
					</aside>
				</div>
				<div class="logo">
					<img src="images/URI.jpg" alt="Логотип сайта" title="Логотип сайта">
				</div>
				<div class="afisha">
					<div class="ya">
						<img src="images/ya.jpg" alt="Моё фото" title="Моё фото">
					</div>
					<h3>Личный сайт студента УлГТУ <br>группы ИВТАПбд-11</br> Юнусова Рустама.</h3>
					<div class="clear"></div>
				</div>
			</header>
		</div>
	</div>
	<div class="menu">
		<div class="mid">
			<nav>
				<ul>
					<li><a href="http://www.ulstu.ru">Сайт УлГТУ</a></li>
					<li><a href="http://www.ulstu.ru/main/view/article/100">Расписание занятий</a></li>
					<li><a href="https://github.com/Hardy173">Ссылка на профиль в GitHub</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<?php
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
         {
           echo '
			<div class="mid">
					<h1>Зарегистрируйтесь или войдите чтобы открыть доступ к галереи!</h1>
			</div>';
           }
       else  
          {
           echo'<div class="content">
		   <div class="menu">
	
		<div id="row">
		
<div class="col-xs-4-1" style="left:100px;">

<div id="nav_slider">
<div id="left_nav"></div>
</div>
 <div id="slider1">
        <div id="slider_box1">
	


            <ul>
							
							
							<li><a><img src="images/paris.jpg" class="image1" width="150" id="1" height="100"></a></li>
							<li><a><img src="images/1_b.jpg" class="image2" width="150" id="2" height="100"></a></li>
							<li><a><img src="images/kes.jpg" class="image3" width="150" id="3" height="100"></a></li>
							<li><a><img src="images/ya.jpg" class="image4" width="150" id="4" height="100"></a></li>
							<li><a><img src="images/det_sad.jpg" class="image5" width="150" id="5" height="100"></a></li>
							<li><a><img src="images/ocean.jpg" class="image1" width="150" id="6" height="100"></a></li>
							<li><a><img src="images/old_car.jpg" class="image2" width="150" id="7" height="100"></a></li>
							<li><a><img src="images/sity.jpg" class="image3" width="150" id="8" height="100"></a></li>
							<li><a><img src="images/dust.jpg" class="image4" width="150" id="9" height="100"></a></li>
							<li><a><img src="images/sity2.jpg" class="image5" width="150" id="10" height="100"></a></li>
							<li><a><img src="images/solnce.jpg" class="image1" width="150" id="11" height="100"></a></li>
							<li><a><img src="images/time.jpg" class="image2" width="150" id="12" height="100"></a></li>
							<li><a><img src="images/vipysk.jpg" class="image3" width="150" id="13" height="100"></a></li>
							<li><a><img src="images/orel.jpg" class="image4" width="150" id="14" height="100"></a></li>
							<li><a><img src="images/melkiy.jpg" class="image5" width="150" id="15" height="100"></a></li>
							
							
							
							
					
						</ul>
        </div>
		</div>
</div>

<div class="col-xs-4">

</div>
<div class="col-xs-4-1">
<div id="nav_slider">
<div id="right_nav"></div>
</div>

 <div id="slider2">
        <div id="slider_box2">
            <ul>
							<li><a><img src="images/sputnik.jpg" class="image10" width="150" id="16" height="100"></a></li>
							<li><a><img src="images/New_zeland.jpg" class="image20" width="150" id="17" height="100"></a></li>
							<li><a><img src="images/japan.jpg" class="image30" width="150" id="18" height="100"></a></li>
							<li><a><img src="images/det_sad.jpg" class="image40" width="150" id="19" height="100"></a></li>
							<li><a><img src="images/dust.jpg" class="image50" width="150" id="20" height="100"></a></li>
							<li><a><img src="images/see.jpg" class="image10" width="150" id="21" height="100"></a></li>
							<li><a><img src="images/1_b.jpg" class="image20" width="150" id="22" height="100"></a></li>
							<li><a><img src="images/KosmoSolnce.jpg" class="image30" width="150" id="23" height="100"></a></li>
							<li><a><img src="images/2_b.jpg" class="image40" width="150" id="24" height="100"></a></li>
							<li><a><img src="images/1_b.jpg" class="image50" width="150" id="25" height="100"></a></li>
							<li><a><img src="images/essen.jpg" class="image10" width="150" id="26" height="100"></a></li>
							<li><a><img src="images/old_car.jpg" class="image20" width="150" id="27" height="100"></a></li>
							<li><a><img src="images/solnce.jpg" class="image30" width="150" id="28" height="100"></a></li>
							<li><a><img src="images/ocean.jpg" class="image40" width="150" id="29" height="100"></a></li>
							<li><a><img src="images/2_b.jpg" class="image50" width="150" id="30" height="100"></a></li>
						</ul>
        </div>
		</div>
</div>
</div>

    <div id="slider" style="right:100px;">
	<div class="like">
<h1><button>Мне нравится</button></h1>
</div>
        <div id="slider_box">
		
            <ul>
							<li><a><img src="images/old_car.jpg" class="image100" width="150" id="31" height="100" alt="image01" /></a></li>
							<li><a><img src="images/0.png" class="image200" width="150" id="32" height="100" alt="image01" /></a></li>
							<li><a><img src="images/4_s.jpg" class="image300" width="150" id="33" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1_b.jpg" class="image400" width="150" id="34" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1september.jpg" class="image500" width="150" id="35" height="100" alt="image01" /></a></li>
							<li><a><img src="images/5_s.jpg" class="image100" width="150" id="36" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1_b.jpg" class="image200" width="150" id="37" height="100" alt="image01" /></a></li>
							<li><a><img src="images/dust.jpg" class="image300" width="150" id="38" height="100" alt="image01" /></a></li>
							<li><a><img src="images/japan.jpg" class="image400" width="150" id="39" height="100" alt="image01" /></a></li>
							<li><a><img src="images/solnce.jpg" class="image500" width="150" id="40" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1_b.jpg" class="image100" width="150" id="41" height="150" alt="image01" /></a></li>
							<li><a><img src="images/KosmoSolnce.jpg" class="image200" width="150" id="42" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1_b.jpg" class="image300" width="150" id="43" height="100" alt="image01" /></a></li>
							<li><a><img src="images/2_b.jpg" class="image400" width="150" id="44" height="100" alt="image01" /></a></li>
							<li><a><img src="images/1september.jpg" class="image500" width="150" id="45" height="100" alt="image01" /></a></li>
						</ul>
        </div>
       
    </div>
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/scr.js"></script>
	</div>
	</div>
	';}  
	?>
	
	
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<div class="footer">
		<div class="mid">
			2017 &copy; Все права защищены | Создатель студент группы ИВТАПбд-11 Юнусов Р.И.
		
		</div>
</body>
</html>