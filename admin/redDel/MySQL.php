<?php
$_SESSION['flag_add']++; // // для удаления значений в поле добавления, но не удалять их в случае неверного значения
include("Forma.php"); // форма ввода, для добавления пользователя

if (isset($_POST['AddOkey'])){ // если нажата кнопка 'AddOkey', то есть 'ƒобавить' (пользовател¤)
	if(empty($_POST['newLogin'])) {
		echo '<font size="3" color = "red" face="Arial">Логин не был введен!</font><br/>';
	}
	elseif (!preg_match("/^\w{3,}$/", $_POST['newLogin'])) {
		echo '<font size="3" color = "red" face="Arial">Логин имеет недопустимый формат!</font><br/>';
	}
	elseif(empty($_POST['newPassword'])) {
		echo '<font size="3" color = "red" face="Arial">Введите пароль!</font><br/>';
	}
	elseif ((strlen($_POST['newPassword'])) < 6 or (strlen($_POST['newPassword'])) > 50) {
		echo '<font size="3" color = "red" face="Arial">Пароль короче 6 символов!</font><br/>';
	}
	
	else { // если предыдущие условия верны
		$newLogin = $_POST['newLogin']; // присваиваем значение логина
		$newPassword = $_POST['newPassword']; // присваиваем значение пароля
		$mdPassword = md5($newPassword); // присваиваем значение пароля
		$nameUsersAvt = $_POST['nameUsersAvt'];
		$userType = $_POST['users_Type']; // тип пользователя
		
		$query = ("SELECT id FROM users WHERE login='$newLogin'"); // в случае, если пользователь с таким логином уже зарегистрирован
		$sql = mysql_query($query) or die(mysql_error()); // выполняем этот запрос
		if (mysql_num_rows($sql) > 0) {
			echo '<font size="3" color = "red" face="Arial">Пользователь с таким логином уже существует!</font><br/>';
		}
			else { // если все условия верны
				$query = "INSERT INTO users (login, password,  nameUsersAvt, userType)VALUES ('$newLogin', '$mdPassword', '$nameUsersAvt', '$userType')";
				$result = mysql_query($query) or die(mysql_error()); // добавляем нового пользователя в базу данных			
				
				echo '<font size="3" color = "#fff" face="Arial">Пользователь <font color = "white" face="Arial">'.$newLogin.'</font> Добавлен!</font><br/>';
				unset($_SESSION['flag_add']);
				echo '<meta http-equiv="refresh" content="2.3;">'; // через 1.8 секунд происходит обновление
			}
		}
	}

?>