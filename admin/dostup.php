<?php
$d_table = mysql_query("SELECT * FROM users;"); // ������������ ���������� �� �������
while($stroka = mysql_fetch_array($d_table)) { // ����� ���� ����� �� ���� ������
	 if((strCaseCmp($_SESSION['login'], $stroka["login"])) == 0) { // ��� ����� ��������, ���� ����� ������������ � ���� ������
		if($stroka["userType"] == 'admin') { //����� �� ��� �����, �� ������� � ���� ������ ���� "userType" (��� ������������), ���� ��� ����� 'admin', �� ��������� ������
			$_SESSION['admin_true'] = true; // ��� �������� ����������� ��������������, ������� ������ � �������������
		}
	}
}
?>