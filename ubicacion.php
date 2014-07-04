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
		<title>ElpollitoPé - Ubicación</title>

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
				<h2>Ubicación</h2>
				<div class="pad_5"></div>

			</div>

			<div class="blq_5 lft_1 txt_rgh">
				<div class="pad_7"></div>
				<p>Nos encontramos ubicados en Américo Vespucio 8678<br> Esquina con Rojas Magallanes.
					Comuna de La Florida<br>Región de Metropolitana.</p><br>
				<div class="pad_5"></div>
				<p><strong>Nuestros teléfonos de contacto son:</strong><br>
				<em>Teléfono:</em> 23000826 <br>
				<em>Celular:</em> 92797440</p>		

			</div>


			<div class="blq_6">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=Am%C3%A9rico+Vespucio+8678,+La+Florida,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=14.395357,33.815918&amp;ie=UTF8&amp;geocode=FTVQAP4dgZ_K-w&amp;split=0&amp;hq=&amp;hnear=Am%C3%A9rico+Vespucio+8678,+La+Florida,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&amp;t=m&amp;z=14&amp;ll=-33.533899,-70.606975&amp;output=embed"></iframe><br /><small><a href="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;q=Am%C3%A9rico+Vespucio+8678,+La+Florida,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=14.395357,33.815918&amp;ie=UTF8&amp;geocode=FTVQAP4dgZ_K-w&amp;split=0&amp;hq=&amp;hnear=Am%C3%A9rico+Vespucio+8678,+La+Florida,+Santiago,+Regi%C3%B3n+Metropolitana,+Chile&amp;t=m&amp;z=14&amp;ll=-33.533899,-70.606975" style="color:#0000FF;text-align:left"><em>Ver mapa más grande</em></a></small>

			</div>

			<div class="pad_5"></div>

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