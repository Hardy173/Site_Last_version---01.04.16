<?php
session_start();
include ("reg/bd.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="images/logo.jpg">
	<link rel="stylesheet" href="style/style.css" media="all">
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
	<div class="content">
		<div class="mid">
			<div class="fon">
			<h1>Вход на сайт</h1>
				<form action="reg/testreg.php" method="post">
					<?php
					// Проверяем, пусты ли пересменные логина и id пользователя
					if (empty($_SESSION['login']) or empty($_SESSION['id']))
					{
					echo "<h1>Заполните форму для входа!</h1><br>";
					}
					else  
					   {
						echo "Привет,".$_SESSION['login']."<br>";
					   }
					?>
					<?php
						if (empty($_SESSION['login']) or empty($_SESSION['id'] ))
						{
							
							echo' <p>
						<label>Ваш логин:<br></label>
						<input name="login" type="text" size="20" maxlength="15">
					  </p>
					  <p>
						<label>Ваш пароль:<br></label>
						<input name="password" type="password" size="20" maxlength="15">
					  </p>
					<p>
					<input type="submit" name="submit" value="Войти">
					<br>
					<a href="reg/reg.php">Зарегистрироваться</a> 
					</p></form>';
						}
						else{
						echo
					   '<form method="post" action="index.php">
						 <br>
						 <a href="reg/exit.php">Выйти</a> 
						 <br>
						 </form>';
						 }
						 ?>
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