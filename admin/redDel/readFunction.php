<?php
if(!empty($newLogin)) { // если поле логин не пусто
	mysql_query("UPDATE users SET login = '$newLogin' WHERE id = $readId"); // записываем новый логин (обновляем логин в базе данных)
}
if(!empty($newPassword)) { // если поле пароль не пусто
	$mdPassword = md5($newPassword); // присваиваем значение пароля
	mysql_query("UPDATE users SET password = '$mdPassword' WHERE id = $readId"); // записываем новый пароль (обновляем пароль в базе данных)
}
if(!empty($nameUsersAvt)) { // если поле имени не пусто
	mysql_query("UPDATE users SET nameUsersAvt = '$nameUsersAvt' WHERE id = $readId"); // записываем новое имя (обновляем имя в базе данных)
}
if(!empty($userType)) { // если поле тип пользователя не пусто
	mysql_query("UPDATE users SET userType = '$userType' WHERE id = $readId"); // записываем новый тип пользователя (обновляем тип пользователя в базе данных) (админ и обычный пользователь)
}
if(!empty($newPassword) || !empty($newLogin) || !empty($nameUsersAvt) || !empty($userType)) { // если выполнено какое-либо вышеперечисленное действие
	echo '<font color = "#8F09E9" size = "3">Данные перезаписаны успешно!</font>';
	//echo '<meta http-equiv="refresh" content="2.3;">'; // через 1.8 секунд происходит переадресация url=../admin.php
}
if(empty($newLogin) && empty($newPassword)  && empty($nameUsersAvt) && empty($userType)) { // если все 3-и поля пусты
	echo '<font color = "#8F09E9" size = "3">Мне показалось или на самом деле ничего не произошло?</font>';
}
?>