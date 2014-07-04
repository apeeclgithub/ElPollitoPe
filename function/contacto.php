<?php

if(strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

mail('contacto@elpollitope.cl','Contacto desde El Pollito Pe',
"Contacto desde El Pollito Pe\n\n".

"El usuario {$_POST['nombre']} con e-mail {$_POST['email']} desea contactar e incluye el siguiente mensaje:\n\n".$_POST['mensaje']);
echo "<script>location.href='../contacto.php?err=10';</script>";
}else{
	echo "<script>location.href='../contacto.php?err=5';</script>";
}


?>