<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio T1-01</h1>
    <p>
        Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación
    </p>
    <hr>
    <?php echo $_POST['n1'], " x ", $_POST['n2'], " = ", $_POST['n1']*$_POST['n2']; ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>