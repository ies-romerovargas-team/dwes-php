<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio T7-01</h1>
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