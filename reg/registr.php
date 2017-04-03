<?php
session_start();
include ("bd.php");
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
			<h2>Регистрация</h2>
			<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['r_password'])) { $r_password=$_POST['r_password']; if ($r_password =='') { unset($r_password);} }
if (isset($_POST['nameUsersAvt'])) { $nameUsersAvt=$_POST['nameUsersAvt']; if ($nameUsersAvt =='') { unset($nameUsersAvt);} }

//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)  or empty($r_password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
echo"Вы ввели не всю информацию, венитесь назад и заполните все поля! <br>";
}


//добавляем проверку на длину логина и пароля
            if    (strlen($login) < 3 or strlen($login) > 15) {
            echo "Логин должен состоять не менее чем из 3 символов и не более чем из    15. <br>";
            }
            if    (strlen($password) < 3 or strlen($password) > 15) {
			echo "Пароль должен состоять не менее чем из 3 символов и не более чем из 15. <br>";
            }
			if    (strlen($r_password) < 3 or strlen($r_password) > 15) {
            echo "Пароль должен состоять не менее чем из 3 символов и не более чем из 15.<br>";
            }

// подключаемся к базе
include ("bd.php");

$nameUsersAvt = $_POST['nameUsersAvt'];


$password=$_POST['password'];
$r_password=$_POST['r_password'];
if($password==$r_password){

}
else{
  echo "Введеные пароли не совпадают!<br>";
  }
  
  $password    = md5($password);//шифруем пароль 
  $r_password    = md5($r_password);//шифруем пароль 
// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
echo"Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<br>";
}

// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password,nameUsersAvt) VALUES('$login','$password','$nameUsersAvt')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../index.php'>Главная страница</a> <br>";
}

else {
echo "Ошибка! Вы не зарегистрированы.";
     }
?>
			
			
			<form action="" method="post">
  <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
  </p>
  <p>
    <label>Имя пользователя:<br></label>
    <input name="nameUsersAvt" type="text" size="15" maxlength="15">
  </p>
  <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
  </p>
  <p>
    <label>Повторите пароль:<br></label>
    <input name="r_password" type="password" size="15" maxlength="15">
  </p>

<p>
<input type="submit" name="submit" value="Зарегистрироваться">
</p></form>

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
   
     

				 
				 
               
     

				 
				 
               