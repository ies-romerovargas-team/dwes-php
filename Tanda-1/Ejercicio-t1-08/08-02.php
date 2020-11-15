<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-08</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-08</h1>
    <p>
        Escribe un programa que calcule el salario semanal de un trabajador en base a las horas
        trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios
    </p>
    <hr>
    <?php echo "Horas trabajadas: ", $_POST['n1'], " x 12 €/hora = ", ($_POST['n1'] * 12), "€ <br>";?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>