<?php
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы
while($stroka = mysql_fetch_array($d_table)) { // вывод всех строк из базы данных
	 if((strCaseCmp($_SESSION['login'], $stroka["login"])) == 0) { // без учета регистра, ищем этого пользователя в базе данных
		if($stroka["userType"] == 'admin') { //когда мы его нашли, то смотрим в базе данных поле "userType" (тип пользователя), если тип равен 'admin', то открываем доступ
			$_SESSION['admin_true'] = true; // при успешной авторизации администратора, открыть доступ к администрации
		}
	}
}
?>