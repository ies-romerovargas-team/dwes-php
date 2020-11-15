<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T1-10</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T1-10</h1>
    <p>
        Realiza un conversor de Mb a Kb
    </p>
    <hr>
    <?php
        echo $_POST['n1'], " Mb => ", $_POST['n1'] * 1024 ," Kb<br>";
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>