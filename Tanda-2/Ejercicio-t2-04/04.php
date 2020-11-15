<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-04</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-04</h1>
    <p>Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las 
    horas extras. Escribe un programa que calcule el salario semanal de un trabajador 
    teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan 
    a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Escriba el número de horas semanales:
        <input type="number" name="hours" min="1">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $horas = $_POST['hours'];
            echo "$horas horas: ", $horas>40 ? 480 + ($horas-40)*16 : $horas*12, " euros.";
        }
    ?>
    </p>
</body>
</html>