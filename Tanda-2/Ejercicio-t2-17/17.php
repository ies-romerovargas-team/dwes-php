<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-17</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-17</h1>
    <p>Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado. Se permiten
        números de hasta 5 cifras</p>
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
            // Con mates TO DO
            $i = 5;
            while ($i>1)
            {
                $n = $n/10;
                $i--;
            }
            // Con cadenas
            echo substr($n, 0, 1);
        }
    ?>
    </p>
</body>

</html>