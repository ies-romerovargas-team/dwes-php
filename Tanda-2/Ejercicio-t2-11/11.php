<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-11</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-11</h1>
    <p>Escribe un programa que dada una hora determinada (horas y minutos),
        calcule los segundos que faltan para llegar a la medianoche.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduce una hora</br>
            hora: <input type="time" name="hora">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){
            $hora = $_POST["hora"];
            $segundosT = 86400 - (substr($hora,0,2) * 3600 + substr($hora,3,2) * 60);
            echo "Faltan ", $segundosT, " segundos para la medianoche";
        }
    ?>
    </p>
</body>

</html>