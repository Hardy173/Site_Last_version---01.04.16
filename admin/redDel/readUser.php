<?php
include("Forma.php"); // форма ввода, для изменение данных пользователя

if(isset($_POST['AddOkey'])) { // есили была нажата кнопка 'Изменить'
	if(preg_match('/[^a-zA-Z1-9\s]+/msi',$_POST['newLogin'])) { // проверка, чтобы логин был введен английскими буквами
		echo '<font size="3" color = "red" face="Arial">Логин должен быть введен английскими буквами!</font>';
	}
	else { // если предыдущие условия верны
		$readId = $idReadUser;
		$newLogin = $_POST['newLogin']; // присваиваем значение логина
		$newPassword = $_POST['newPassword']; // присваиваем значение пароля
		$nameUsersAvt = $_POST['nameUsersAvt']; // присваиваем значение имени
		$userType = $_POST['users_Type']; // тип пользователя

		$query = ("SELECT id FROM users WHERE login = '$newLogin'"); // в случае, если пользователь с таким логином уже зарегистрирован
		$sql = mysql_query($query) or die(mysql_error()); // выполняем этот запрос
		if($newLogin == $_POST['newLogin']) {
			$query2 = ("SELECT id FROM users WHERE login = '$newLogin'"); // в случае, если пользователь с таким email уже зарегистрирован
			$sql = mysql_query($query2) or die(mysql_error()); // выполняем этот запрос
			if($newLogin == $_POST['newLogin']) {
				unset($_POST['newLogin']); // присваиваем значение логина
				unset($_POST['newPassword']); // присваиваем значение пароля
				unset($_POST['nameUsersAvt']); // присваиваем значение имени
				include("readFunction.php"); // выполнение операции перезаписывания
			}
		}
		elseif (mysql_num_rows($sql) > 0) {
			echo '<font size="3" color = "red" face="Arial">Пользователь с таким логином уже зарегистрирован!</font>'; // в случае, если пользователь с таким логином уже зарегистрирован
		}
		
		}
	}
?>