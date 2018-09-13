<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>INICIO DE SESSION EN PHP</title>
    </head>
    <body>
        
        <?php 
        
        if(isset($_GET['error']) == 'si') {
            
            echo 'Tu Usuario y/o Password son Incorrectos, intentalo de nuevo' . '<br><br>';
        }
        elseif(isset($_GET['error']) == 'fuera') {
            
            echo "No puedes entrar directamente a la Pagina Privada. Introduce Usuario y Contraseña<br><br>";
        }
        
        ?>
        
        
        <form action="ingreso.php" method="post">
            <label for="nombre">Nombre de Usuario</label>
            <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre de Usuario">
            
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            
            <br>
            
            <input type="submit" value="Entrar !!">
        </form> 
    </body>
</html>