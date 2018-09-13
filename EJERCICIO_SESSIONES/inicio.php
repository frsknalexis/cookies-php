<?php 

session_start();

if(isset($_SESSION['verificado'])){
    
    echo 'Esta es tu Pagina Privada';
    
}
else {
    
    header('location:Login.php?error=fuera');
    exit();
}
    
?>