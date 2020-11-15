<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-04</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-04</h1>
    <p>
        Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
    </p>
    <hr>
    <?php     
    echo $_POST['n1'], " + ", $_POST['n2'], " = ", $_POST['n1'] + $_POST['n2'];
    echo "<br>"; 
    echo $_POST['n1'], " - ", $_POST['n2'], " = ", $_POST['n1'] - $_POST['n2'];
    echo "<br>";
    echo $_POST['n1'], " x ", $_POST['n2'], " = ", $_POST['n1'] * $_POST['n2'];
    echo "<br>";
    echo $_POST['n1'], " / ", $_POST['n2'], " = ", $_POST['n1'] / $_POST['n2'];
    echo "<br>";
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>