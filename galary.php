<?php
session_start();
mysql_connect ('localhost','root',''); // имя пользователя и пароль
mysql_select_db ("users"); // название таблицы в базе данных
include ("reg/bd.php");
include("admin/dostup.php"); // при успешной авторизации администратора открыть доступ к администрации
?>

<html>
<head>
<title>My web-сайт</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=cp1251">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
<?php
// увеличение картинок при наведении
include("js/imgHoverZum.js");

// возвращение в исходную позицию и уменьшение размера при нажатии, чтобы исчез, при увеличении картинки (эффекта увеличения)
include("js/imgClickUnZum.js");
	
// увеличение картинок при нажатии
include("js/imgClickZum.js");
?>
</script>
<style type="text/css">
<?php
//увеличение картинки при нажатии
include("style/imgClickZum.css");
?>
</style>
</head>
<body>
<div id="container">
  <div id="header">
     <div id="banner">
     </div>
        <div id="navlist">
		<ul>
                       <li><a href="index.php">Главная</a></li>
				       <li><a href="galary.php">Галерея</a></li>
				       <li><a href="Planets.php">Планеты</a></li>
				       <li><a href="Galaxy.php">Галактика</a></li>
					   
	    </ul>
		</div>
  </div>
   <div id = "left_window">
<?php
		if($_SESSION['admin_true']==true){
		echo'<td><a href="admin/admin.php">Админка</a> </td>';
		}
?>
   <?php
        include_once("index1.php");
   ?>

  </div>
   
   <div id="content">
      <ul id="gallery"> 
		<?php
		include('colVoImg.php'); // нахождение количества картинок из БД
		for($i=1; $i<=$colVoImgGal; $i++) { // загрузка изображений на сайт
			echo '<li><a><img id="asd" class="thumbnail"  src = "images/'.$i.'.jpg" width="100" height="100"/></a></li>';
		}
		?>										
      </ul>	
	   <?php 
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
         {
           echo '
			<div align = "center">
					Чтобы добавлять свои картинки войдите на сайт или зарегистрируйтесь!</a>
			</div>';
           }
       else  
          {
           include('imgDovnloadNa.php'); // загрузка картинок
           }
		    ?>
		</div>	

	
   <div id="footer"> 
      <p>Сайт сделан на локальном сервере denwer.Создатель Улюшев Виктор,группа ИВТбд-12.© 2013.</p>
   </div>

</div>	
   	<div id="popup">
	<div id="center">
		<img id="lightbox"/>
	</div><!--#center--> 
</div>  <!--#popup--> 			 
</body>
</html>
				 
				 
               