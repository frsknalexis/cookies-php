<?php 

if(isset($_COOKIE['visita'])) {
    
    echo 'Que Alegria verte de nuevo en esta Pagina';
}
else {
    
    setcookie('visita', 'Ok', time()+31536000);
    echo 'Bienvenido a mi pagina por primera vez';
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CONTADOR DE VISITAS-COOKIES</title>
    </head>
    <body>
    </body>
</html>