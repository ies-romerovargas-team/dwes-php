<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio T9-01</h1>
    <p>
        Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3 π r<sup>2</sup> h.
    </p>
    <hr>
    <?php
    CONST PI = 3.1416;
    echo "V = 1/3 * π * ", $_POST['r'], "<sup>2</sup> * ", $_POST['h'], " => ", PI * $_POST['r'] * $_POST['r'] * $_POST['h'] / 3, "<br>";
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>