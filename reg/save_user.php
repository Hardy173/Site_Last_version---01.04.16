<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['r_password'])) { $r_password=$_POST['r_password']; if ($r_password =='') { unset($r_password);} }
if (isset($_POST['nameUsersAvt'])) { $nameUsersAvt=$_POST['nameUsersAvt']; if ($nameUsersAvt =='') { unset($nameUsersAvt);} }

//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную




//добавляем проверку на длину логина и пароля
      

// подключаемся к базе
include ("bd.php");

$nameUsersAvt = $_POST['nameUsersAvt'];


$password=$_POST['password'];
$r_password=$_POST['r_password'];

  
  $password    = md5($password);//шифруем пароль 
  $r_password    = md5($r_password);//шифруем пароль 
// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);


// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (login,password,nameUsersAvt) VALUES('$login','$password','$nameUsersAvt')");
// Проверяем, есть ли ошибки

?>