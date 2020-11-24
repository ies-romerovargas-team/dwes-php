<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-13</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-13</h1>
    <p>Escribe un programa que lea una lista de diez números y determine
        cuántos son positivos, y cuántos son negativos.</p>
    <?php if(!isset($_POST['Enviar'])):
            $CuentaNumeros = 0;
            $CuentaPositivos = 0;
        else:
            $CuentaNumeros = $_POST['CuentaNumeros'];
            $CuentaPositivos = $_POST['CuentaPositivos'];
            $CuentaNumeros++;
            if($CuentaNumeros<=10):
                if($_POST['n']>0):
                    $CuentaPositivos++;
                endif;
            endif;
        endif;
        ?>
    <?php if($CuentaNumeros<10):?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <?php echo "Introduzca nº ". ($CuentaNumeros + 1), ": ";?>
        <input type="number" name="n" id="n">
        <input type="hidden" name="CuentaNumeros" value="<?php echo $CuentaNumeros?>">
        <input type="hidden" name="CuentaPositivos" value="<?php echo $CuentaPositivos?>">
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php else:?>
    <p>Ha subido 10 numeros</p>
    <p>El número de positivos que ha introducido es <?php echo $CuentaPositivos?></p>
    <p>El numero de negativos que ha introducido es <?php echo 10-$CuentaPositivos?></p>
    <?php endif;?>
</body>

</html>