<?php
	include 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$fono = $_POST['fono'];
	$direccion = $_POST['direccion'];
	$comuna = $_POST['comuna'];
	$pagina = $_POST['pagina'];

		
		$SQL = "Select * From usuario Where usu_email = '$email'";
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		$datos = mysql_fetch_row($consulta);

			if ($filas>0){
				echo "<script>location.href='../$pagina.php?err=3';</script>";
			}else{
				$SQL = "Insert Into usuario (usu_nom, usu_tel, usu_dir, usu_com, usu_email, usu_pass, usu_tipo, usu_est) 
				Values ('".$nombre."','".$fono."','".$direccion."','".$comuna."','".$email."','".$pass."',1,'inactivo')";
				mysql_query($SQL);
				mail($email'Comprobar email',
				"Para comprobar su email pinche el siguiente link:\n\n".

				"<a href=\"http://www.elpollitope.cl/funtion/comprobar.php?email=$email");

				echo "<script>location.href='../$pagina.php?err=4';</script>";
			}	
	
?>