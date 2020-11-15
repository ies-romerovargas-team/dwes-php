<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-06</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-06</h1>
    <p>Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. 
    Aplica t = sqr(2h/g) siendo g = 9.81m/s<sup>2</sup></p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca la altura:
            <input type="number" name="h">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $h = $_POST['h'];            
            echo round(caidalibre($h),5), " segundos.";
        }

        function caidalibre($altura, $gravedad = 9.81){
            return sqrt(2 * $altura / $gravedad);
        }
    ?>
    </p>
</body>
</html>