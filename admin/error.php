<?php
include_once("../bd.php"); // подключаемся к базе данных
?>
<!DOCTYPE html>
<html>
<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="images/logo.jpg">
	<link rel="stylesheet" href="css/style.css" media="all">
</head>
<body>
	<div class="header">
		<div class="mid">
			<header>
				<div class="topmenu">
					<aside>
						<a href="index.php">Главная</a>
						<a href="biografiya.php">Биография</a>
						<a href="fotogalery.php">Фотогалерея</a>
						<a href="obomne.php">Обо мне</a>
						<a href="portfolio.php">Портфолио</a>
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
					<p><span>Привет, <?php echo $_SESSION['username']; ?><span></p>
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
	<div class="content">
		<div class="mid">
			<div class="fon">
				<h3>
					<div align = "center"><font color = "red" size = "4">Недостаточно прав для просмотра данной страницы</font></div>
					<div align = "center"><a href = "../../index.php"><font color = "FFFFFF" size = "3">На главную!</font></a></div>
				<h3>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="mid">
			2017 &copy; Все права защищены | Сайт сделан на локальном сервере Denwer | Создатель студент группы ИВТАПбд-11 Юнусов Р.И.
		
		</div>
	</div>
</body>
</html>






<html>
 <head>
 <title>My web-сайт</title>
 <link rel="stylesheet" type="text/css" href="../style/style.css" />
 <script type="text/javascript" src="../js/jquery.js"></script>
 </head>
<body>
<div id="container">
  <div id="header">
     <div id="banner">
      </div>
        <div id="navlist">
		<ul>
                       <li><a href="../index.php">Главная</a></li>
				       <li><a href="../galary.php">Галерея</a></li>
				       <li><a href="../Planets.php">Планеты</a></li>
				       <li><a href="../Galaxy.php">Галактика</a></li>
					  
	    </ul>
		</div>
  </div>

   <div id="content">
             <div align = "center"><font color = "red" size = "4">Недостаточно прав для просмотра данной страницы</font></div>
					<div align = "center"><a href = "../../index.php"><font color = "FFFFFF" size = "3">На главную!</font></a></div>
   </div>		
   <div id="footer"> 
      <p>Сайт сделан на локальном сервере denwer.Создатель Улюшев Виктор,группа ИВТбд-12.© 2013.</p>
   </div>
</div>				 
</body>
</html>