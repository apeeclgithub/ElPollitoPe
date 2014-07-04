<?php
	include_once 'function/conexion.php';
	include_once 'function/mensajes.php';
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="utf-8">
		<title>ElpollitoPé - Registrate</title>

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
		
			<a href="index.php"> <img src="img/pollo.jpg" class="blq_9"></a>
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
		          	<a href="https://www.facebook.com/ElPollitoPe?fref=ts" target="_blank"><img class="mini" src="img/facebook.png"></a>
		          	<a href="#"><img class="mini" src="img/twitter.png"></a>
        		</div>
			</nav>
			<?php 
            	if (@$_GET['err']) {
              
	              	$mensaje = mensaje($_GET['err']);
	              	echo  "<div class=\"txt_ctr txt_error alerta\">";
	              	echo $mensaje;
	              	echo  "</div>";
            	
            	} 
          	?>
			<div class="blq_12 txt_ctr">





				<div class="pad_5"></div>
				<h2>Registro</h2>
				<div class="pad_5"></div>
			</div>

			<div class="blq_6 txt_rgh">
				<div class="pad_1"></div>
				<p>Nombre</p>
				<div class="pad_3"></div>
				<p>Email</p>
				<div class="pad_3"></div>
				<p>Contraseña</p>
				<div class="pad_3"></div>
				<p>Teléfono</p>
				<div class="pad_3"></div>
				<p>Dirección</p>
				<div class="pad_3"></div>
				<p>Comuna</p>

			</div>

			<div class="blq_6">
				<form action="function/registro.php" method="POST">
					<input class="inp_2" type="text" name="nombre" required><br>
					<input class="inp_2" type="email" name="email" required><br>
					<input class="inp_2" type="password" name="pass" required><br>
					<input class="inp_2" type="tel" name="fono" required><br>
					<input class="inp_2" type="text" name="direccion" required><br>
					<select name="comuna">
						<option value="none" disabled="" selected=""> Seleccione Comuna</option>
						<option value="Santiago">Santiago</option>
						<option value="Alhué">Alhué</option>
						<option value="Buin">Buin</option>
						<option value="Calera de tango">Calera de tango</option>
						<option value="Cerrillos">Cerrillos</option>
						<option value="Colina">Colina</option>
						<option value="Conchalí">Conchalí</option>
						<option value="Curacaví">Curacaví</option>
						<option value="El Bosque">El Bosque</option>
						<option value="El Monte">El Monte</option>
						<option value="Estación Central">Estación Central</option>
						<option value="Huechuraba">Huechuraba</option>
						<option value="Isla de Maipo">Isla de Maipo</option>
						<option value="Independencia">Independencia</option>
						<option value="La Cisterna">La Cisterna</option>
						<option value="La Florida">La Florida</option>
						<option value="La Granja">La Granja</option>
						<option value="La Pintana">La Pintana</option>
						<option value="La Reina">La Reina</option>
						<option value="Las Condes">Las Condes</option>
						<option value="Lampa">Lampa</option>
						<option value="Lo Barnechea">Lo Barnechea</option>
						<option value="Lo Espejo">Lo Espejo</option>
						<option value="Lo Prado">Lo Prado</option>
						<option value="Macul">Macul</option>
						<option value="Maipú">Maipú</option>
						<option value="María Pinto">María Pinto</option>
						<option value="Melipilla">Melipilla</option>
						<option value="Ñuñoa">Ñuñoa</option>
						<option value="Padre Hurtado">Padre Hurtado</option>
						<option value="Paine">Paine</option>
						<option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
						<option value="Peñaflor">Peñaflor</option>
						<option value="Peñalolén">Peñalolén</option>
						<option value="Pirque">Pirque</option>
						<option value="Providencia">Providencia</option>
						<option value="Pudahuel">Pudahuel</option>
						<option value="Puente Alto">Puente Alto</option>
						<option value="Quilicura">Quilicura</option>
						<option value="Quinta Normal">Quinta Normal</option>
						<option value="Recoleta">Recoleta</option>
						<option value="Renca">Renca</option>
						<option value="San Bernardo">San Bernardo</option>
						<option value="San Joaquín">San Joaquín</option>
						<option value="San José de Maipo">San José de Maipo</option>
						<option value="San Miguel">San Miguel</option>
						<option value="San Pedro">San Pedro</option>
						<option value="San Ramón">San Ramón</option>
						<option value="Talagante">Talagante</option>
						<option value="Til til">Til til</option>
						<option value="Vitacura">Vitacura</option>

					</select><br>
					<input type="hidden" name="pagina" value="registro">
					<input type="submit">
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