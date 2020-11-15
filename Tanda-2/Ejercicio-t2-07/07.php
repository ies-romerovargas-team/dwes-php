<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-07</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-07</h1>
    <p>Realiza un programa que calcule la media de tres notas.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca notas:
            N1: <input type="number" name="n1" max="10">
            N2: <input type="number" name="n2" max="10">
            N3: <input type="number" name="n3" max="10">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){            
            echo "La nota media de ", $_POST['n1'],", ", $_POST['n2'], " y de ", $_POST['n3']," es ";
            echo round(($_POST['n1'] + $_POST['n2'] + $_POST['n3'])/3,2);
        }
    ?>
    </p>
</body>
</html>