<?php
// ������� ��������
$d_table = mysql_query("SELECT * FROM users;"); // ������������ ���������� �� �������
$IdMax = $_SESSION['IdMax'];

for($i = 0; $i <= $IdMax ; $i++) {
	if(isset($_POST[$i.'del'])) {
		while($stroka = mysql_fetch_array($d_table)) { // ����� ���� ����� �� ���� ������
			if($stroka["id"] == $i) {
				$loginUsers = $stroka["login"];
			}
		}
		if($loginUsers == $_SESSION['login']) {
			echo '<font color = "red"><h3>'.$loginUsers.'������ �������� �� ��������!</h3></font></br>';
		}
		else {
			$strSQL = "DELETE FROM users WHERE id = $i"; // ������� ��������
			mysql_query($strSQL); // ��������
			exit("<meta http-equiv='Refresh' content='0'>");
		}
	}
}
?>