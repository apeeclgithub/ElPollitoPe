<?php
	include_once 'function/conexion.php';
	include_once 'function/mensajes.php';

	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ElpollitoPé - Administrar</title>

		<!--Los Estilos-->
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<style>
			.nav{background-color:#ff0000;color:#ffffff;}
			.menu li a:hover,.menu ul li:hover a{background:#ff6464;color:#FFFFFF;text-decoration:none}
			.slider{width: 1190px;margin-left: 5px;margin-right: 5px; height: 500px}
		</style>

		<!--Los Scripts-->


	</head>

	<body>
		<div class="container">
		
			<img src="img/pollo.jpg" class="blq_9">
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
				if($est=='activo'){
					echo "<h4 class=\"txt_success\">Su estado es: Activo</h4>";
					echo "<label class=\"txt_success\">Haga sus pedidos a través de nuestra web y reciba en su casa con toda comodidad</label>";
					echo "<div class=\"pad_3\"></div>";
				}else{
				echo "<h4 class=\"txt_error\">Su estado es: Inactivo</h4>";
				echo "<label class=\"txt_warning\">No puede realizar pedidos hasta que confirme su correo electrónico</label>";
				echo "<div class=\"pad_3\"></div>";
				}
				echo "<a class=\"span1\" href=\"function/logout.php\">Logout</a>";
				
				
		    }else{
		    	echo"<h3>Inicia sesión</h3>
				    <form action=\"function/valida.php\" method=\"POST\">
			        <input required name=\"email\" class=\"inp_3\" type=\"text\" placeholder=\"Ingresa email\">  
			        <input required name=\"pass\" class=\"inp_3\" type=\"password\" placeholder=\"Ingresa password\">	
			        <input type=\"hidden\" name=\"pagina\" value=\"index\">	
			        <input class=\"inp_3\" type=\"submit\">
		    	</form>";
		    }
		    ?>
			</div>
		
			<nav class="blq_12 nav">
				<ul class="menu">
		        	<li><a href="index.php">Inicio</a></li>
		          	<li><a href="menu.php">Menú</a></li>
		          	<li><a href="carta.php">Carta</a></li>
		          	<li><a href="registro.php">Registro</a></li>
		          	<li><a href="contacto.php">Contacto</a></li>
		          	<li><a href="ubicacion.php">Ubicación</a></li>
        		</ul>

        		<div class="right">
		          	<a href="#"><img class="mini" src="img/facebook.png"></a>
		          	<a href="#"><img class="mini" src="img/twitter.png"></a>
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
				<h2>Administración</h2>
				<div class="pad_5"></div>
			</div>

			<div class="blq_3 alerta">
				<h3>Datos Generales</h3>

				<p>Usuarios Totales:
				<?php
					$sql1 = "select * from usuario";
					$con1 = mysql_query($sql1);
					$res1 = mysql_num_rows($con1);
					echo "$res1";
				?></p>
				<p>Usuarios activos:
				<?php
					$sql2 = "select * from usuario where usu_est = 'activo'";
					$con2 = mysql_query($sql2);
					$res2 = mysql_num_rows($con2);
					echo "$res2";
				?></p>
				<p>Usuarios inactivos:
				<?php
					$sql3 = "select * from usuario where usu_est = 'inactivo'";
					$con3 = mysql_query($sql3);
					$res3 = mysql_num_rows($con3);
					echo "$res3";
				?></p>
				<div class="pad_2"></div>

			</div>





			<div class="blq_9 alerta_2">
			<form name="form1" method="post" ACTION="function/mostrar.php" id="mostrar"> 
<br>
<center><b>Mostrar usuarios</b></center>
<table border="0" align="center">

</table>

<br>
<center><input type="submit" value="Mostrar usuario" name="btnmostrar"></center>

<br>

</form>


			</div>

			<div class="lft_3 blq_9 alerta_2" ><form name="form1" method="post" ACTION="function/actualizar.php" id="registro"> 
<br>
<center><b>Actualizar usuarios</b></center>
<table border="0" align="center">
<tr>
<td><br>Ingrese e-mail para actualizar usuario: <input type="text" name="email" id="email"   placeholder="algo@algo.algo" required /><br></td>
</tr>
</table>

<br>
<center><input type="submit" value="Mostrar usuario" name="btnmostrar"></center>

<br>

</form>

			</div>





			
			

			<div class="pad_7"></div>

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
			 <img class="mini1" src="img/delivery1.png">
         
 
    		</div>
    		<div class="pad_3"></div>
    		</footer>
		</div><!--fin container-->
	</body>
</html>