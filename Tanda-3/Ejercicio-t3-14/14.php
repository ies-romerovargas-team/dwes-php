<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-14</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-14</h1>
    <p>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Base:
        <input type="number" name="base"></br>
        Exponente:
        <input type="number" name="expo"></br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php if(isset($_POST['Enviar'])):
        $base = $_POST['base'];
        $expo = $_POST['expo'];
    ?>
    <p><?php echo $base?><sup><?php echo $expo?></sup> = <?php echo $base**$expo;?></p>
    <?php endif;?>
</body>

</html>