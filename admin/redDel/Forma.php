<?php
if($_SESSION['flag_add'] > 1) {
	if(isset($_POST['newLogin'])) {
		$newLogin = $_POST['newLogin']; // временная переменная для заполнения полей ввода в форме неправильными данными
		$newPassword = $_POST['newPassword']; // временная переменная для заполнения полей ввода в форме неправильными данными
		$nameUsersAvt = $_POST['nameUsersAvt']; // временная переменная для заполнения полей ввода в форме неправильными данными
	}
	else {
		include("valueUserRead.php");
		$newLogin = $_POST['newLogin']; // временная переменная для заполнения полей ввода в форме неправильными данными
		$newPassword = $_POST['newPassword']; // временная переменная для заполнения полей ввода в форме неправильными данными
		$nameUsersAvt = $_POST['nameUsersAvt']; // временная переменная для заполнения полей ввода в форме неправильными данными
	}
}

echo '
<form method = "POST" action = "">
	<table align = "center">
		<tr>
			<td><font color = "#fff" face="Arial">Введите логин пользователя</font></td>
			<td><input type = "text" name = "newLogin" value="'.$newLogin.'" maxlength = "30" '; if($readForm == 'read') {echo 'required';} echo ' placeholder = "Введите логин"></input></td>
		</tr>
		
		<tr>
			<td><font color = "#fff" face="Arial">Введите пароль пользователя</font></td>
			<td><input type = "password" name = "newPassword" value="'.$newPassword.'" maxlength = "50" '; if($readForm == 'read') {echo 'required';} echo ' placeholder = "Введите пароль"></input></td>
		</tr>
		
		
		<tr>
			<td><font color = "#fff" face="Arial"">Введите имя пользователя</font></td>
			<td><input type = "text" name = "nameUsersAvt" value="'.$nameUsersAvt.'" maxlength = "30" placeholder = "Введите имя"></input></td>
		</tr>
		
		<tr>
		<td rowspan = "2"><font color = "#fff" face="Arial">Тип пользователя:</font>:</td>
		<td><input type="radio" size="20" name="users_Type" value = "users"'; if($_SESSION['dataUserTypeForm'] == 'users') {echo 'checked';} echo '><font color="#000" face="Arial">Обычный пользователь</font></input></td>
		</tr>
		
		<tr>
		<td><input type="radio" size="20" name="users_Type" value = "admin"'; if($_SESSION['dataUserTypeForm'] == 'admin') {echo 'checked';} echo '><font color="000" face="Arial">Администратор</font></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" name = "AddOkey" value = "'; if($readForm == 'read') {echo " Добавить!";} else echo " Изменить!"; echo ' "></input></td>
		</tr>
	</table>
</form>';
?>