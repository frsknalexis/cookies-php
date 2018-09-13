<?php 

$fecha = date("d/m/Y | H:i:s");

setcookie('fecha', $fecha, time()+31536000);

if(isset($_COOKIE['fecha'])) {
    
    echo 'Hola de nuevo, tu ultima visita fue el: ' . $_COOKIE['fecha'];
}
else {
    
    echo 'Esta es tu primer visita a nuestra Pagina';
}


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>FECHA DE VISITAS-COOKIE</title>
    </head>
    <body>
    </body>
</html>