<?php
// записываем в сессию id пользователя и отправляем его на редактирование
$d_table = mysql_query("SELECT * FROM users;"); // формирование информации из таблицы
$IdMax = $_SESSION['IdMax'];

for($i = 0; $i <= $IdMax ; $i++) {
	if(isset($_POST[$i.'red'])) {
		$_SESSION['idReadUser'] = $i;
		echo '<script type="text/javascript">  
			location.replace("http://mysite.ru/admin/redDel/readIndex.php");
		</script>';
	}
}
?>