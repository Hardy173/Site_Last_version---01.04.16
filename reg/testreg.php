<?php
session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
//exit ("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}



// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

$password    = md5($password);//шифруем пароль 

$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['password']))
{
//если пользователя с введенным логином не существует
//exit ("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}
else {
//если существует, то сверяем пароли
          if ($myrow['password']==$password) {
          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
          $_SESSION['login']=$myrow['login']; 
          $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
         // echo "<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>";
          }

       else {
       //если пароли не сошлись
      // exit ("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
	   }
}
?>