<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-02</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-02</h1>
    <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while.</p>
    <p>
        <?php
        $i=0;
        while($i*5<=100){
            echo $i * 5, " ";
            $i++;
        }        
        ?>
    </p>
</body>

</html>