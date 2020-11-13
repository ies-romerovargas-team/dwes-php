<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio T10-01</h1>
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