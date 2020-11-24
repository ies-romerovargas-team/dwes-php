<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-15</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-15</h1>
    <p>Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente),
        saque por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
        introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos
        el 2 y el 5, se deberán mostrar 2<sup>1</sup>, 2<sup>2</sup>, 2<sup>3</sup>, 2<sup>4</sup>, 2<sup>5</sup>.</p>
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
        for($i = 1; $i<=$expo; $i++):
            $cont = 1;
            while($cont<$i):
                $base = $base * $base;
                $cont++;
            endwhile;
    ?>
    <p><?php echo $_POST['base']?><sup><?php echo $i?></sup> = <?php echo $base;?></p>
    <?php
            $base = $_POST['base'];
        endfor;
    endif;?>
</body>

</html>