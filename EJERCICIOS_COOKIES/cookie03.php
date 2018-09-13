<?php 

if(isset($_COOKIE['contador'])) {
    
    setcookie('contador', $_COOKIE['contador']+ 1, time()+ 31536000);    
    echo 'Numero de Visitas: ' . $_COOKIE['contador'];
    
}
else {
    
    setcookie('contador', 1, time()+31536000);
    echo 'Bienvenidos por primera vez a nuestra pagina';
}



?>