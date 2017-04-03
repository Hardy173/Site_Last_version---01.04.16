<?php
// функция удаления
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы
$IdMax = $_SESSION['IdMax'];

for($i = 0; $i <= $IdMax ; $i++) {
	if(isset($_POST[$i.'del'])) {
		while($stroka = mysql_fetch_array($d_table)) { // вывод всех строк из базы данных
			if($stroka["id"] == $i) {
				$loginUsers = $stroka["login"];
			}
		}
		if($loginUsers == $_SESSION['login']) {
			echo '<font color = "white"  face="Arial"><h3>'.$loginUsers.', данное действие не доступно!</h3></font></br>';
		}
		else {
			$strSQL = "DELETE FROM users WHERE id = $i"; // функция удаления
			mysql_query($strSQL); // удаление
			exit("<meta http-equiv='Refresh' content='0'>");
		}
	}
}
?>