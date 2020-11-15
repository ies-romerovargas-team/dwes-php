<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-03</title>
</head>
<body>
    <p><a href="/index.php">Inicio</a></p>
    <p>Escribe un programa en que dado un número del 1 a 7 escriba 
    el correspondiente nombre del día de la semana.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Escriba el número del día de la semana [1-7]:
        <input type="number" name="day" max="7" min="1">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $arrayDias = ["1" => "Lunes",
            "2" => "Martes",
            "3" => "Miércoles",
            "4" => "Jueves",
            "5" => "Viernes",
            "6" => "Sábado",
            "7" => "Domingo"];            
            echo $arrayDias[$_POST['day']];
        }
    ?>
    </p>
</body>
</html>