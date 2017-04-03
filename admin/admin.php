<?php
include_once("../reg/bd.php"); // подключаемся к базе данных
?>
<!DOCTYPE html>
<html>

<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="../images/logo.jpg">
	<link rel="stylesheet" href="../style/style.css" media="all">
</head>
<body>
	<div class="header">
		<div class="mid">
			<header>
				<div class="topmenu">
					<aside>
						<a href="../index.php">Главная</a>
						<a href="../biografiya.php">Биография</a>
						<a href="../fotogalery.php">Фотогалерея</a>
						<a href="../obomne.php">Обо мне</a>
						<a href="../portfolio.php">Портфолио</a>
					</aside>
				</div>
				<div class="logo">
					<img src="../images/URI.jpg" alt="Логотип сайта" title="Логотип сайта">
				</div>
				<div class="afisha">
					<div class="ya">
						<img src="../images/ya.jpg" alt="Моё фото" title="Моё фото">
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
	<div class="content">
		<div class="mid">
			<div class="fon">
			<div id="contentik2">
					<br/>
					<p align = "center"><font id="addUsers" color = "#fff" face="Arial" size = "5"><a href = "redDel/addIndex.php">Добавим  пользователя!</a></font>
					<br/>
					</br>
					<p align = "center"><font color = "#fff" face="Arial" size = "5">Пользователи!</font></p>
					</br>
					<?php
					unset($_SESSION['flag_add']); // для удаления значений в поле добавления, но не удалять их в случае неверного значения
					include("redDel/tableUsers.php");
					?>
   </div>	

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
   
     
     