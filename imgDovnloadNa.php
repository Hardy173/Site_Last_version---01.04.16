<?php
echo '
<div align="center">
<table>
<tr>
<td><font color="#000" size="3"><strong>�������� ���� ��� ��������:</strong></font></td>
</tr>
<tr>
<td><form enctype="multipart/form-data" method="post">
<input type="file" name="userfile"/></td>
</tr>
<tr>
<td><input type="submit" value=" ���������! " name="button"></td>
</tr>
</form><tr><td>';

$max_image_size = 1035*1024; // ������������ ������ ��������
if (isset($_FILES["userfile"])) { // ������ �� ������
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { // ��������, ������ �� ����
		$filenameUl = $_FILES['userfile']['tmp_name']; // ��� �����
		$im = @imagecreatefromstring(file_get_contents($filenameUl)); // �������� �� ���� �����������, ����� �� ���� ������ �����
		$file = $_FILES['userfile']['tmp_name']; // ��� �����
		if (substr($_FILES['userfile']['type'],0,5) == 'image') {
			if ($im == true) { // ���������� ���� �������� �� ���� �����������, ����� �� ���� ������ �����
				if (filesize($file) <= $max_image_size) { // �������� �� � ������
					$newname = $colVoImgGal + 1; // ��� ��������� ��������, � ��������� ����� � �� 
					$id = '1'; // id � ���� ������
					mysql_query("UPDATE gallereyindex SET indexImg = '$newname' WHERE id = $id"); // ���������� ����� ����� �������� � ��
					if (@move_uploaded_file($file, "images/".$newname.".jpg")) { // ��������, ���������� �� ����������, ���� ����� ����������� ��������
						echo "<meta http-equiv='Refresh' content='0; URL=galary.php'>"; // ���������� ��������
					}
					else
						echo '<font color="#1FD5F0" size="3">����� � ������������� ������� �����������!</font>';
				}
				else
					echo '<font color="#1FD5F0" size="3">����������� ���� ������� �����!</font>';
			}
			else
				echo '<font color="#1FD5F0" size="3">��� �� ��� �����-�� ����� ���� ���������!</font>';
		}
		else
			echo '<font color="#1FD5F0" size="3">������ ����� �����-�� �����!</font>';
	}
	else
		echo '<font color="#1FD5F0" size="3">���� �� ������!</font>';
}
echo '</td></tr>
</table>
</div>';
?>