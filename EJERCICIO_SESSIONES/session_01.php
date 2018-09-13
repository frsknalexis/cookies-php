<?php 

session_start();

if(isset($_SESSION['contador'])) {
    
    $_SESSION['contador']++;
    
}
else {
    
    $_SESSION['contador'] = 1;
    
}

echo 'Nos haz visitado: ' . $_SESSION['contador'] . ' veces.';

?>