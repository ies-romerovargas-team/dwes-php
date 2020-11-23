<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-09</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-09</h1>
    <p>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</p>
    <p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="n">
        <input type="submit" name="Enviar">
    </form>
    <?php if(isset($_POST['n']) && is_numeric($_POST['n'])): ?>
    <p><?php echo "Número: ", $_POST['n'];?></p>
    <?php
        $n = abs($_POST['n']);
        $i = 1;
        while ($n>=10){
            $i++;
            $n = floor($n/10);
        }
        echo $i, " digitos";
        ?>
    <?php endif; ?>
    </p>
</body>

</html>