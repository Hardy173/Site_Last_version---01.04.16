<?php
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы
// таблица пользователей
echo '
<form action="" method="POST" name="deleteformUser">
<table id = "tab" border = "1">
<td align = "center">&nbsp;<font color = "maroon" face="Arial">id</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Логин</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Пароль</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Имя</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Статус</font>&nbsp;</td>
<td align = "center" colspan="2">&nbsp;<font color = "maroon" face="Arial">Операции</font>&nbsp;</td>';

while($stroka = mysql_fetch_array($d_table)) { // вывод всех строк из базы данных
	include("usersType.php"); // выбор типа пользователя
	echo '<tr>';
    echo '<td><font face="Arial">&nbsp;'.$stroka["id"].'&nbsp;</td>';
    echo '<td id="tabName"><font face="Arial">&nbsp;'.$stroka["login"].'&nbsp;</td>';
	echo '<td><font face="Arial">&nbsp;'.$stroka["password"].'&nbsp;</td>';
	echo '<td id="tabName"><font face="Arial">&nbsp;'.$stroka["nameUsersAvt"].'&nbsp;</td>';
	echo '<td align = "center"><font face="Arial">&nbsp;'.$dataUserType.'&nbsp;</td>'; // печать типа пользователя
	echo '<td><font face="Arial"><input style="background:  no-repeat 4px;cursor:pointer;" type="submit" value="Delite" name="'.$stroka["id"].'del"></input></td>';
	echo '<td><font face="Arial"><input style="background:  no-repeat 1px;cursor:pointer;" type="submit" value="Read" name="'.$stroka["id"].'red"></input></td>';
	echo '</tr>';
	$_SESSION['IdMax'] = $stroka["id"]; // максимальный Id в базе данных, (для ограничениея ввода Id при удалении)
}
echo '</table></br></form>';
include("deleteUsers.php"); // если была нажата кнопка удаления, то удалить пользователя
include("readFuncId.php"); // если была нажата кнопка редактирования, то редактировать пользователя
?>