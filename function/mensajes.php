<?php
function mensaje($variable)
{
	switch($variable)
	{
		case 1:
			$mensaje = "<p>Los datos no coinciden</p>";
		break;
		case 2:
			$mensaje = "<p>Las contraseñas deben ser iguales</p>";
		break;
		case 3:
			$mensaje = "<p>Correo ya registrado</p>";
		break;
		case 4:
			$mensaje = "<p>Usuario ingresado perfectamente</p>";
		break;
		case 5:
			$mensaje = "<p>Mensaje no fue enviado, por favor intentelo nuevamente</p>";
		break;
		case 10:
			$mensaje = "<p>Mensaje enviado, Muchas gracias por comunicarse</p>";
		break;
	}
	return $mensaje;
}
?>