<?php
// вывод данных изменяемого пользовател¤
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы

// таблица пользователей
echo '<p align = "center"><font color = "#fff" face="Arial" size = "4">Данные изменяемого пользователя</font></p><br/>';
echo '
<form action="" method="POST" name="deleteformUser">
<table id = "tab" border = "2"  margin: auto;>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">id</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Логин</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Пароль</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Имя</font>&nbsp;</td>
<td align = "center">&nbsp;<font color = "maroon" face="Arial">Статус</font>&nbsp;</td>';

while($stroka = mysql_fetch_array($d_table)) { // вывод всех строк из базы данных
	if($stroka["id"] == $idReadUser) {
		include("usersType.php"); // выбор типа пользователя
		echo '<tr>';
		echo '<td><font face="Arial">&nbsp;'.$stroka["id"].'&nbsp;</td>';
		echo '<td id="tabName"><font face="Arial">&nbsp;'.$stroka["login"].'&nbsp;</td>';
		echo '<td><font face="Arial">&nbsp;'.$stroka["password"].'&nbsp;</td>';
		echo '<td id="tabName"><font face="Arial">&nbsp;'.$stroka["nameUsersAvt"].'&nbsp;</td>';
		echo '<td align = "center"><font face="Arial">&nbsp;'.$dataUserType.'&nbsp;</td>'; // печать типа пользовател¤
	}
}
echo '</table></br></form>';
?>