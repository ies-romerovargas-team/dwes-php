<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-16</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-16</h1>
    <p>Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca un número:
            <input type="number" name="n1">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){
            $n = $_POST['n1'];
            echo substr($n, strlen($n)-1, 1);
        }
    ?>
    </p>
</body>

</html>