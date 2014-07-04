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
		<title>ElpollitoPé - Carta</title>

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
				<h2>Nuestra Carta!</h2>
				<div class="pad_5">Sí desea conocer los precios y hacer un pedido en línea debe registrarse.</div>
			</div>

			<div class="blq_3"></div>

			<div class="blq_9">
<div id="ampliar">

<?php
						
						$SQL = "SELECT * FROM carta";
						$consulta = mysql_query($SQL);
						$filas = mysql_fetch_row($consulta);
						$total = mysql_num_rows($consulta);
						
					if($total>0){
						
					do{
							echo "<img class=\"blq_3\" src=\"img/carta/".$filas[4].".jpg\">";
							echo "<div class=\"blq_5\">";
							echo "<h3>".$filas[1]."</h3>";
							$sql2 = "select * from usuario where usu_email = '".@$_SESSION['a_user']."'";
							$con2 = mysql_query($sql2);
							$resul2 = mysql_fetch_array($con2);
							$nnn = mysql_num_rows($consulta);
			
							$est2 = $resul2['usu_est'];
							echo "<form action=\"pedido.php\" name=\"pedido\" method=\"POST\" >";
				
							if(@$est=='activo'){
								echo "<h3 class=\"txt_rojo\"> $".$filas[3]. " </h3> 
								<div class=\"pad_3\"></div>
								<input type=checkbox name=\"platos[]\" onclick=\"document.pedido.".$filas[2].".disabled=!document.pedido.".$filas[2].".disabled\"  value=".$filas[2]."><label class=\"txt_success\"> Agregar al pedido</label><br><input class=\"inp_1\" type=\"text\" id=".$filas[2]." name=\"cantidad[]\" disabled> Ingrese Cantidad" ;
							}else{
								echo "<label class=\"txt_warning\">Debe verificar su cuenta para ver precios y hacer pedidos</label>";
							}
							echo "</div>";
							echo "<div class=\"clear\"></div>";
							}while($filas = mysql_fetch_row($consulta));
							echo "<input type=\"submit\" name=\"enviar\" value=\"Enviar pedido\" />";
							echo "</form>";
						}
					?>

</div>
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