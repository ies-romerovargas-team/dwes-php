<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-01</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-01</h1>
    <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .</p>
    <p>
        <?php
        for($i=0; $i<=100; $i++){
            if($i%5==0) echo $i, " ";
        }        
        ?>
    </p>
</body>

</html>