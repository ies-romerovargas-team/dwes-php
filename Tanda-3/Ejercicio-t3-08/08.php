<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-08</title>
    <style>
    table {
        border: 1px solid black;
    }

    .celda {
        border: 1px dotted black
    }
    </style>

</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-08</h1>
    <p>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla
        (table en HTML).</p>
    <p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="n">
        <input type="submit" name="Enviar">
    </form>

    <?php if(isset($_POST['n']) && is_numeric($_POST['n'])): ?>
    <table>
        <caption>La tabla del <?php echo $_POST['n']?></caption>
        <?php for($i=0; $i<=10;$i++):?>
        <tr>
            <td class="celda"><?php echo $_POST['n'], " x ", $i, " =";?></td>
            <td class="celda"><?php echo ($_POST['n'] * $i);?></td>
        </tr>
        <?php endfor; ?>
    </table>
    <?php endif; ?>
    </p>
</body>

</html>