<?php


if(isset($_COOKIE['nombre'])) {
    
    echo 'La Cookie tiene el valor de: ' . $_COOKIE['nombre'];
    
}
else {
    
    echo 'No hay Cookies creadas';
    
}

?>

<a href="cookie1d.php">Salir del Sistema</a>