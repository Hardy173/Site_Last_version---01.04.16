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
					<h1>Зарегистрируйтесь или войдите чтобы открыть доступ к биографии!</h1>
			</div>';
           }
       else  
          {
           echo'
	<div class="content">
		<div class="mid">
			<div class="fon">
				<div class="block1" style="font: 16px/24px Arial; margin:15px; padding: 0;">
					<strong><h1>Моя краткая биография</h1></strong>
					<h3>
						<p><a href="lorem.html"><img src="images/melkiy.jpg" width="300" height="290" class="leftimg"></a>Меня зовут Юнусов Рустам Ильхамович, я родился в городе Сенгилей, Ульяновской области.
						Родился 26 марта 1998 года в Сенгилее.</p> С 4-х лет ходил в детский садик "Солнышко",
						который находится в городе Сенгилей. В 7 лет пошёл в первый класс в МОУ СОШ №1 г.Сенгилея.
						Мой первый классный руководитель была Яковлева Надежда Макаровна. В 5 классе мой классный 
						руководитель сменился, им стала Плеханова Тамара Алексеевна.<br><br><br><br> <p><a href="lorem.html"><img src="images/kes.jpg" width="400" height="290" class="rightimg"></a> С 7 класса начал увлекаться баскетболом.
						В 2013 году стали финалистами Ульяновской области на соревнованиях КЭС-баскет. В 2016 году повторили
						свой успех, снова став финалистами Ульяновской области(заняли 4 место).</p><br><br><br><br><br><br><br><br>
						
					</h3>
				</div>
			</div>
		</div>
		  </div>';}
		  ?>
	<div class="footer">
		<div class="mid">
			2017 &copy; Все права защищены | Создатель студент группы ИВТАПбд-11 Юнусов Р.И.
		
		</div>
	</div>
</body>
</html>