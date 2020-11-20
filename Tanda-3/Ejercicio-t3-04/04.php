<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-04</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-04</h1>
    <p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for</p>
    <p>
        <?php
        for($i=320;$i>=160;$i=$i-20):
            echo $i, " ";
        endfor;
        ?>
    </p>
</body>

</html>