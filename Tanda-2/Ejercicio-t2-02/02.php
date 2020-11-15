<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-02</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-02</h1>
    <p>Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
     buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 
     13 a 20 y de 21 a 5 respectivamente. Sólo se tienen en cuenta las horas, los minutos 
     no se deben introducir por teclado.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>¿qué hora es?:
        <input type="time" name="hour">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $hora = substr($_POST['hour'],0,2);
            echo $hora!=1 ? "Son las " : "Es la ";
            echo $hora, " hora";
            echo $hora!=1 ? "s" : "";
            $horaval = intval($hora);            
            if($horaval>=6 and $horaval<=12){
                echo ", buenos días";
            }
            if($horaval>=13 and $horaval<=20){
                echo ", buenas tardes";
            }
            if($horaval>=21 or $horaval<=5){
                echo ", buenas noches";
            }
        }
    ?>
    </p>
</body>
</html>