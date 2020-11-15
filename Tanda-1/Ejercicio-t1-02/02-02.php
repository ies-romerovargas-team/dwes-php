<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-02</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-02</h1>
    <p>
        Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deberá introducir
        por teclado.
    </p>
    <hr>
    <?php echo $_POST['n1'], " € => ", $_POST['n1'] * 166.3860; ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>