<?php
	session_start();
	include_once 'conexion.php';
	
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$pagina = $_POST['pagina'];
	
	$sql = "SELECT * FROM usuario WHERE usu_email = '$email' AND usu_pass = '$pass'";
	$consulta = mysql_query($sql);
	$fila = mysql_fetch_array($consulta);
	

		if($email != $fila['usu_email'] && $pass != $fila['usu_pass']){
			echo "<script>location.href='../$pagina.php?err=1';</script>";
		}else if($fila['admin'] == 2){
			$_SESSION["a_user"] = $fila['usu_email'];	
			echo "<script>location.href='../admin.php';</script>";
		}else{
			$_SESSION["a_user"] = $fila['usu_email'];
			echo "<script>location.href='../$pagina.php';</script>";
		}
	
?>