<?php
session_start();
mysql_connect ('localhost','root',''); // ��� ������������ � ������
mysql_select_db ("users"); // �������� ������� � ���� ������
include ("reg/bd.php");
include("admin/dostup.php"); // ��� �������� ����������� �������������� ������� ������ � �������������
?>

<html>
<head>
<title>My web-����</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=cp1251">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
<?php
// ���������� �������� ��� ���������
include("js/imgHoverZum.js");

// ����������� � �������� ������� � ���������� ������� ��� �������, ����� �����, ��� ���������� �������� (������� ����������)
include("js/imgClickUnZum.js");
	
// ���������� �������� ��� �������
include("js/imgClickZum.js");
?>
</script>
<style type="text/css">
<?php
//���������� �������� ��� �������
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
                       <li><a href="index.php">�������</a></li>
				       <li><a href="galary.php">�������</a></li>
				       <li><a href="Planets.php">�������</a></li>
				       <li><a href="Galaxy.php">���������</a></li>
					   
	    </ul>
		</div>
  </div>
   <div id = "left_window">
<?php
		if($_SESSION['admin_true']==true){
		echo'<td><a href="admin/admin.php">�������</a> </td>';
		}
?>
   <?php
        include_once("index1.php");
   ?>

  </div>
   
   <div id="content">
      <ul id="gallery"> 
		<?php
		include('colVoImg.php'); // ���������� ���������� �������� �� ��
		for($i=1; $i<=$colVoImgGal; $i++) { // �������� ����������� �� ����
			echo '<li><a><img id="asd" class="thumbnail"  src = "images/'.$i.'.jpg" width="100" height="100"/></a></li>';
		}
		?>										
      </ul>	
	   <?php 
		if (empty($_SESSION['login']) or empty($_SESSION['id']))
         {
           echo '
			<div align = "center">
					����� ��������� ���� �������� ������� �� ���� ��� �����������������!</a>
			</div>';
           }
       else  
          {
           include('imgDovnloadNa.php'); // �������� ��������
           }
		    ?>
		</div>	

	
   <div id="footer"> 
      <p>���� ������ �� ��������� ������� denwer.��������� ������ ������,������ �����-12.� 2013.</p>
   </div>

</div>	
   	<div id="popup">
	<div id="center">
		<img id="lightbox"/>
	</div><!--#center--> 
</div>  <!--#popup--> 			 
</body>
</html>
				 
				 
               