<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-07</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-07</h1>
    <p>
        Escribe un programa que calcule el total de una factura a partir de la base imponible
    </p>
    <hr>
    <?php echo $_POST['n1'], " + ", $_POST['n2'], "% => ", ($_POST['n1'] * $_POST['n2']) / 100, "<br>";
    echo "Total: ", ($_POST['n1'] * $_POST['n2']) / 100 + $_POST['n1'];?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>