<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-03</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-03</h1>
    <p>
        Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por
        teclado.
    </p>
    <hr>
    <?php        
        echo $_POST['n1'], " pesetas => ", round($_POST['n1'] / 166.3860, 2), " €";
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>