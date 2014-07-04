<?php
require ("conexion.php");
$nombre = $_POST['nombre'];
$fono = $_POST['fono'];
$dire = $_POST['dire'];
$comuna = $_POST['comuna'];
$email = $_POST['email'];




	$sql = "UPDATE usuario SET usu_nom='".$nombre."', usu_tel='".$fono."', usu_dir='".$dire."', usu_com='".$comuna."', usu_email='".$email."' WHERE usu_email = '".$email."'";
				mysql_query($sql);

	echo "<script>location.href='../admin.php';</script>";
