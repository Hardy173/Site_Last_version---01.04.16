<?php
session_start();
include("reg/bd.php");
include("admin/dostup.php"); // при успешной авторизации администратора открыть доступ к администрации
			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Личный сайт Рустама Юнусова</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icom" href="../images/logo.jpg">
	<link rel="stylesheet" href="../style/style.css" media="all">
	<title>Авторизация пользователей</title>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

</head>
<body>
	<!-- Регистрация-->

	
	
	
	
	
	<div class="header">
		<div class="mid">
			<header>
				<div class="topmenu" >
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
					<img src="../images/URI.jpg" alt="Логотип сайта" title="Логотип сайта">
				</div>
				<div class="afisha">
					<div class="ya">
						<img src="../images/ya.jpg" alt="Моё фото" title="Моё фото">
					</div>
					<h3>Личный сайт студента УлГТУ группы ИВТАПбд-11</br> Юнусова Рустама.</h3>
					<?php
					if (!(empty($_SESSION['login']) or empty($_SESSION['id']))){
         
		 
					echo'<p><span>Привет,';}?> <?php echo $_SESSION['login']; ?>
					<?php
					if (!(empty($_SESSION['login']) or empty($_SESSION['id'])))
         {
		 echo'<a href="avtorizaciya.php?logout=1">Выход</a><span></p>
		 <br>';}
		 ?>
					<?php 
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
         {
				echo'	<p><a href="avtorizaciya.php" target="_blank">Вход</a></p>
					<p><a href="reg/registr.php" target="_blank">Регистрация</a></p>
					<div class="clear"></div>';
		 }
		 ?>
				</div>
			</header>
		</div>
	</div>
	<div class="menu">
		<div class="mid">
			<nav>
				<ul>
					<li><a href="../result.php">Лаба по ДМ и МЛ №1</a></li>
					<li><a href="http://www.ulstu.ru/main/view/article/100">Расписание занятий</a></li>
					<li><a href="https://github.com/Hardy173">Ссылка на профиль в GitHub</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
	<div class="content">
	<?php 
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
         {
           echo '
			<div class="mid">
					<h1>Зарегистрируйтесь или войдите чтобы читать эту статью!</h1>
			</div>';
           }
       else  
          {
           echo'
		<div class="mid">
			<div class="fon">
				<div class="block">
					<a href="animation">
						<div class="anons">
							<section>
								<img src="../images/Dolma.jpg" width="400" height="300" alt="Анимация">
								<h3>Последний день в школе</h3>
								<p>В последний день в школе мы решили раскраситься в далматинцев...</p>
							</section>
						</div>
				</div>
				<div class="block">
					<a href="animation">
						<div class="anons">
							<section>
								<img src="../images/vipysk.jpg" width="400" height="300" alt="1 сентября">
								<h3>Выпускной-2016 СШ г.Сенгилея</h3>
								<p>Единственный и неповторимый выпускной из школы...</p>
							</section>
						</div>
					</a>
				</div>
				<div class="clear">
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





