<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio T3-01</h1>
    <p>
        Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por
        teclado.
    </p>
    <hr>
    <?php     
        echo "I<br>";
        echo $_POST['n1'], " pesetas => ", $_POST['n1'] / 166.3860 
    ?>
    <br>
    <button onclick="window.history.go(-1); return false;">Volver</button>
</body>

</html>