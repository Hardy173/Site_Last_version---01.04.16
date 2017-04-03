<?php
if($stroka["userType"] == 'admin') {
	$dataUserType = '<font color = "red" face="Arial" size = "4">Администратор</font>';
	$_SESSION['dataUserTypeForm'] = 'admin';
}
elseif($stroka["userType"] == 'users') {
	$dataUserType = '<font color = "white" face="Arial" size = "4">Пользователь</font>';
	$_SESSION['dataUserTypeForm'] = 'users';
}
else {
	$dataUserType = '<font color = "white" face="Arial" size = "4">Пользователь</font>';
	$_SESSION['dataUserTypeForm'] = 'users';
}
?>