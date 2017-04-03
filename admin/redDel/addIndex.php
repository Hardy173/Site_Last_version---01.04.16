<?php
include_once("../../reg/bd.php"); // подключаемся к базе данных
?>
<!DOCTYPE html>
<html>
<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="../../images/logo.jpg">
	<link rel="stylesheet" href="../../style/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../../style/style1.css" />
</head>
<body>
	<div class="header">
		<div class="mid">
			<header>
				<div class="topmenu">
					<aside>
						<a href="../../index.php">Главная</a>
						<a href="../../biografiya.php">Биография</a>
						<a href="../../fotogalery.php">Фотогалерея</a>
						<a href="../../obomne.php">Обо мне</a>
						<a href="../../portfolio.php">Портфолио</a>
						<?php
		if($_SESSION['admin_true']==true){
		echo'<a href="../../admin/admin.php">Админка</a>';
		}
?>
					</aside>
				</div>
				<div class="logo">
					<img src="../../images/URI.jpg" alt="Логотип сайта" title="Логотип сайта">
				</div>
				<div class="afisha">
					<div class="ya">
						<img src="../../images/ya.jpg" alt="Моё фото" title="Моё фото">
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
             <!--Добавление пользователя-->
					<?php
					unset($_SESSION['dataUserTypeForm']);
					if(isset($_SESSION['flag_add'])) {
						$_SESSION['flag_add']++;
					}
					else {
						$_SESSION['flag_add'] = 0; // для удаления значений в поле добавления, но не удалять их в случае неверного значения
					}
					echo '
						<p align = "center"><font color = "#000" face="Arial" size = "4">Добавить пользователя!</font></p><br/>
					';
					$readForm = 'read';
					include('MySQL.php');
					?>
					<br/>
   </div>	
</div>
</div>   
	<div class="footer">
		<div class="mid">
			2017 &copy; Все права защищены | Создатель студент группы ИВТАПбд-11 Юнусов Р.И.
		
		</div>
	</div>
</body>
</html>





