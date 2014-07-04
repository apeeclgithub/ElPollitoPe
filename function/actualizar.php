<?php
	include_once 'conexion.php';
	include_once 'mensajes.php';

	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="utf-8">
		<title>ElpollitoPé - Administrar</title>

		<!--Los Estilos-->
		<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
		<style>
			.nav{background-color:#ff0000;color:#ffffff;}
			.menu li a:hover,.menu ul li:hover a{background:#ff6464;color:#FFFFFF;text-decoration:none}
			.slider{width: 1190px;margin-left: 5px;margin-right: 5px; height: 500px}
		</style>

		<!--Los Scripts-->


	</head>

	<body>
		<div class="container">
		
			<img src="../img/pollo.jpg" class="blq_9">
			<div class="blq_3">
			<div class="pad_3"></div>
			<?php
			if (isset($_SESSION['a_user'])){
				$sql = "select * from usuario where usu_email = '".$_SESSION['a_user']."'";
				$con = mysql_query($sql);
				$resul = mysql_fetch_array($con);
				$nom = strtoupper($resul['usu_nom']);
				$est = $resul['usu_est'];
				echo "<h3><em>".$nom."</em></h3>";
				
				
		    }else{
		    	echo"<h3>Inicia sesión</h3>
				    <form action=\"function/valida.php\" method=\"POST\">
			        <input required name=\"email\" class=\"inp_3\" type=\"text\" placeholder=\"Ingresa email\">  
			        <input required name=\"pass\" class=\"inp_3\" type=\"password\" placeholder=\"Ingresa password\">	
			        <input type=\"hidden\" name=\"pagina\" value=\"carta\">	
			        <input class=\"inp_3\" type=\"submit\">
		    	</form>";
		    }
		    ?>
			</div>
		
			<nav class="blq_12 nav">
				<ul class="menu">
		        	<li><a href="../index.php">Inicio</a></li>
		          	<li><a href="../menu.php">Menú</a></li>
		          	<li><a href="../carta.php">Carta</a></li>
		          	<li><a href="../registro.php">Registro</a></li>
		          	<li><a href="../contacto.php">Contacto</a></li>
		          	<li><a href="../ubicacion.php">Ubicación</a></li>
        		</ul>

        		<div class="right">
		          	<a href="#"><img class="mini" src="../img/facebook.png"></a>
		          	<a href="#"><img class="mini" src="../img/twitter.png"></a>
        		</div>
			</nav>

			<div class="blq_12 txt_ctr">


			<?php 
            	if (@$_GET['err']) {
              
	              	$mensaje = mensaje($_GET['err']);
	              	echo  "<div class=\"txt_ctr txt_error alerta\">";
	              	echo $mensaje;
	              	echo  "</div>";
            	
            	} 
          	?>


				<div class="pad_5"></div>
				<h2>Ver usuarios</h2>
				<div class="pad_5">*La contraseña se encuentra encriptada, para desencriptar ingresa a <a href="http://www.md5online.es/">MD5</a></div>
			</div>






			<div class="lft_2 blq_8 alerta_2 txt_ctr">

       <form name="form1" method="post" ACTION="actualiza.php" id="registro"> 

<?php
require ("conexion.php");

$email = $_POST['email']; //lo mismo que en el de arriba en este

$peticion = "SELECT * FROM usuario WHERE usu_email = '".$email."'";
$tabla = mysql_query($peticion);

while ($campos = mysql_fetch_array($tabla)) {
  echo "<table  align='center' ps_set_border_style(psdoc, style, width) >\n";
  echo "<tr>";
  echo "<td>Nombre: <td><input type='text' name='nombre'  value='".$campos['usu_nom']."'></td></td>";
  echo "</tr>\n";
  echo "<tr>";
  echo "<td>Teléfono:<td><input type='text' name='fono' value='".$campos['usu_tel']."'></td></td>";
  echo "</tr>\n";
  echo "<tr>";
  echo "<td>Dirección:<td><input type='text' name='dire' value='".$campos['usu_dir']."'></td></td>";
  echo "</tr>\n";
  echo "<tr>";
  echo "<td>Comuna:<td><input type='text' name='comuna' value='".$campos['usu_com']."'></td></td>";
  echo "</tr>\n";
  echo "<tr>";
  echo "<td>E-mail: <td><input type='text' name='email' value='".$campos['usu_email']."' disabled></td></td>";
  echo "</tr>\n";
  echo "</table>\n";
  echo '<br><br>';
  echo "<input type='submit' value='Actualizar datos' name='B1'></td>";

}
?>
</form>
<br>
<br>

			</div>





			
			

			<div class="pad_7" ><center><input class="btn" type="button" value="Volver" onclick="location.href = '../admin.php' "></center></div>

			<footer>
			<div class="blq_5 lft_1">
            	<address>
            	<h3>El pollito Pé</h3>    
            	<p>Bienvenidos a www.elpollitope.cl, lugar que agota todos sus esfuerzos para hacer llegar a sus clientes productos de nuestro País (Perú).</p>
          		</address>
          		        		<address>
          			<h3>Delivery</h3>
           			Américo Vespucio 8678 Esq. Rojas Magallanes. La Florida, Santiago<br>
          			<abbr title="Telefono">Teléfono:</abbr> 23000826 <br>
          			<abbr title="Celular">Celular:</abbr> 92797440
        		</address>
         
        		<address>
          			<a href="mailto:#">contacto@elpollitope.cl</a>
        		</address>  
    		</div>
    		<div class ="blq_5 right rgh_1 txt_rgh"> 
			 <img class="mini1" src="../img/delivery1.png">
         
 
    		</div>
    		<div class="pad_3"></div>
    		</footer>
		</div><!--fin container-->
	</body>
</html>