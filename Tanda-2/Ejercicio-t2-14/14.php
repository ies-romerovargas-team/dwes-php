<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-14</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-14</h1>
    <p>Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca número: <br />
            <input type="number" name="n"><br />
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
    if(isset($_POST['Enviar'])){
        $n = $_POST['n'];
        echo $n, " ";
        if($n%2) {
            echo "|| Es impar ";
        } else {
            echo "|| Es par ";
        }
        if($n%5) {
            echo "|| No es divisible por 5";
        } else {
            echo "|| Es divisible por 5";
        }
    }
    ?>
    </p>
</body>

</html>