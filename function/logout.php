<?php
session_start();
if (isset($_SESSION['a_user'])) {
	include_once 'conexion.php';
} else {
	echo "<script>location.href='../index.php';</script>";
}
session_destroy();
echo "<script>location.href='../index.php';</script>";
?>