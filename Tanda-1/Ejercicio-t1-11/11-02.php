<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-11</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-11</h1>
    <p>
        Realiza un conversor de Kb a Mb.
    </p>
    <hr>
    <?php
        echo $_POST['n1'], " Kb => ", round($_POST['n1'] / 1024, 2) ," Mb<br>";
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>