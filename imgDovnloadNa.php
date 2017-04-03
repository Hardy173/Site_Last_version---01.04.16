<?php
echo '
<div align="center">
<table>
<tr>
<td><font color="#000" size="3"><strong>Выбирите файл для загрузки:</strong></font></td>
</tr>
<tr>
<td><form enctype="multipart/form-data" method="post">
<input type="file" name="userfile"/></td>
</tr>
<tr>
<td><input type="submit" value=" Загрузить! " name="button"></td>
</tr>
</form><tr><td>';

$max_image_size = 1035*1024; // максимальный размер картинки
if (isset($_FILES["userfile"])) { // нажата ли кнопка
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { // проверка, выбран ли файл
		$filenameUl = $_FILES['userfile']['tmp_name']; // имя файла
		$im = @imagecreatefromstring(file_get_contents($filenameUl)); // проверка на само изображение, чтобы не были другие файлы
		$file = $_FILES['userfile']['tmp_name']; // имя файла
		if (substr($_FILES['userfile']['type'],0,5) == 'image') {
			if ($im == true) { // собственно сама порверка на само изображение, чтобы не были другие файлы
				if (filesize($file) <= $max_image_size) { // проверка на её размер
					$newname = $colVoImgGal + 1; // имя следующей картинки, и следующее число в БД 
					$id = '1'; // id в базе данных
					mysql_query("UPDATE gallereyindex SET indexImg = '$newname' WHERE id = $id"); // добавление имени новой картинки в БД
					if (@move_uploaded_file($file, "images/".$newname.".jpg")) { // проверка, существует ли директория, куда будут загружаться картинки
						echo "<meta http-equiv='Refresh' content='0; URL=galary.php'>"; // обновление страницы
					}
					else
						echo '<font color="#1FD5F0" size="3">Папка с изображениями галереи отсутствует!</font>';
				}
				else
					echo '<font color="#1FD5F0" size="3">Загружаемый файл слишком велик!</font>';
			}
			else
				echo '<font color="#1FD5F0" size="3">Чет вы мне какой-то левый файл подсунули!</font>';
		}
		else
			echo '<font color="#1FD5F0" size="3">Формат файла какой-то левый!</font>';
	}
	else
		echo '<font color="#1FD5F0" size="3">Файл не выбран!</font>';
}
echo '</td></tr>
</table>
</div>';
?>