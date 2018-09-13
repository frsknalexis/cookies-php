<?php 

$persona = array('Pedro', 'Perez', '26', 'Madrid', 'abcde');

setcookie('micookie[persona]', $persona[0], time()+3600);
setcookie('micookie[apellido]', $persona[1], time()+3600);
setcookie('micookie[edad]', $persona[2], time()+3600);
setcookie('micookie[ciudad]', $persona[3], time()+3600);
setcookie('micookie[contra]', $persona[4], time()+3600);


echo "<br>El Nombre es: " . $_COOKIE['micookie']['persona'];
echo "<br>El Apellido es: " . $_COOKIE['micookie']['apellido'];
echo "<br>La edad es: " . $_COOKIE['micookie']['edad'];
echo "<br>La ciudad es: " . $_COOKIE['micookie']['ciudad'];
echo "<br>El password es: " . $_COOKIE['micookie']['contra'];

?>