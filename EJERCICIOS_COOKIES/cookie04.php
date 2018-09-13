<?php 

if(isset($_POST['color'])) {
    
    $color = $_POST['color'];
    setcookie('color', $color, time()+31536000);
    
}
else {
    
    if(isset($_COOKIE['color'])) {
        
        $color = $_COOKIE['color'];
        
    }
    else {
        
        $color = 'white';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EJERCICIO COOKIES</title>
    </head>
    <body <?php echo 'style="background-color:' . $color . '"' ?>>
        <form method="post" action="">
            
            <label for="color">Escoge tu color de fondo</label>
            <select name="color">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="yellow">Amarillo</option>
                <option value="silver">Gris</option>
                <option value="black">Negro</option>
            </select>
            <input type="submit" value="Cambiar Color">
        </form>
    </body>
</html>