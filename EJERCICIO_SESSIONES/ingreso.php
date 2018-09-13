<?php

$userok = 'Pedro';

$passok = 'abcde';

if($_POST['nombre'] == $userok && $_POST['password'] == $passok) {
    
    session_start();
    
    $_SESSION['verificado'] = 'si';
    echo 'Tienes Acceso a la Pagina Privada';
    echo '<a href="inicio.php">Acceder a Pagina Privada</a>';
}
else {
    
    header('location: Login.php?error=si');
    exit();
    
}


?>