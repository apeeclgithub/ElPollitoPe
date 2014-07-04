<?php

	$mail = $_GET['email'];

	echo "su email es $mail";

	$sql = "Update usuario set usu_est='activo' where usu_email='$mail'";
	$con = mysql_query($sql);

	echo "<script>location.href='../index.php';</script>";


?>