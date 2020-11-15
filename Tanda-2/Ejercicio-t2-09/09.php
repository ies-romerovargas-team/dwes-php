<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-09</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-09</h1>
    <p>Realiza un programa que resuelva una ecuación de segundo grado (del tipo 
    ax<sup>2</sup> + bx + c = 0).</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca los valores a, b y c de la ecuación:
            a: <input type="number" name="n1">
            b: <input type="number" name="n2">
            c: <input type="number" name="n3">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $a = $_POST['n1'];
            $b = $_POST['n2'];
            $c = $_POST['n3'];
            if($a!=0){
                $x1 = ($b * -1 + sqrt($b * $b - (4 * $a * $c)))/(2 * $a);
                $x2 = ($b * -1 - sqrt($b * $b - (4 * $a * $c)))/(2 * $a);
                echo "Las soluciones son X<sub>1</sub> = ", $x1,", y X<sub>2</sub> = ", $x2;
            } else {
                echo "No tiene solución real";
            }
        }

    ?>
    </p>
</body>
</html>