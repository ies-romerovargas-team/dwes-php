<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-18</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-18</h1>
    <p>Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
        negativo. Se permiten números de hasta 5 dígitos.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca un número:
            <input type="number" name="n1" max="99999" min="-99999">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){
            $n = abs($_POST['n1']);
            echo strlen($n);
        }
    ?>
    </p>
</body>

</html>