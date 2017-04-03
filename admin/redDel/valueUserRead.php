<?php
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы
$idReadUser = $_SESSION['idReadUser'];
while($stroka = mysql_fetch_array($d_table)) { // вывод всех строк из базы данных
	if($stroka["id"] == $idReadUser) {
		include("usersType.php"); // выбор типа пользователя

		//$dataUserType;
		$_POST['newLogin'] = $stroka["login"];
		$_POST['newPassword'] = $stroka["password"];
		$_POST['nameUsersAvt'] = $stroka["nameUsersAvt"];
	}
}
?>