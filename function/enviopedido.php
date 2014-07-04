<?php

if(strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

mail('mario.meneses.a@gmail.com','Contacto desde El Pollito Pe',
"Contacto desde El Pollito Pe\n\n".

"El usuario con e-mail {$_POST['email']} desea el siguiente pedido:\n\n".
foreach (array_combine($_POST['platos'], $_POST['cantidad']) as $code => $name) {
    echo str_replace(chr(95), ' ', $code)."<br>Cantidad: ". $name."<br><br>";

}
]);
echo "<script>location.href='../contacto.php?err=10';</script>";
}else{
	echo "<script>location.href='../contacto.php?err=5';</script>";
}


?>