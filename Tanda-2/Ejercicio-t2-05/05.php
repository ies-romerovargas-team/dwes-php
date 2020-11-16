<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-05</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-05</h1>
    <p>Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0)</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca los valores de la ecuación:
            a: <input type="number" name="na" step="any"> b: <input type="number" name="nb" step="any">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){
            echo $_POST['na'], "x ", $_POST['nb']>0 ? "+ ". $_POST['nb'] : $_POST['nb'], " = 0<br/>";
            echo "x = ", ($_POST['nb'] * -1)/$_POST['na'];
        }
    ?>
    </p>
</body>

</html>