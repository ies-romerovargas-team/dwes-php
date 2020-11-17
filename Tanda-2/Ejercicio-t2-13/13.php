<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-13</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-13</h1>
    <p>Escribe un programa que ordene tres números enteros introducidos por teclado.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca números: <br />
            n1: <input type="number" name="n[0]"><br />
            n2: <input type="number" name="n[1]"><br />
            n3: <input type="number" name="n[2]"><br />
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
    if(isset($_POST['Enviar'])){
        asort($_POST['n']);
        foreach($_POST['n'] as $valor){
            echo $valor, " ";
        }
    }
    ?>
    </p>
</body>

</html>