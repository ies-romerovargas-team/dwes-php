<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-19</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-19</h1>
    <p>Realiza un programa que diga si un número entero positivo introducido por teclado
        es capicúa. Se permiten números de hasta 5 cifras. </p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca un número:
            <input type="number" name="n1" max="99999" min="-99999">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){            
            $n = abs($_POST['n1']);            
            $l = strlen($n);
            $i = 0;
            $capicua = false;            
            while(substr($n, $i, 1)==substr($n, ($l-$i-1), 1)){
                $i++;
                if($i>$l/2) {
                    $capicua = true;
                break;
                }
            }
            if($capicua){
                echo "<br>", $n, " Es capicúa!!";
            } else {
                echo "<br>", $n, " No es capicúa";
            }
        }
    ?>
    </p>
</body>

</html>