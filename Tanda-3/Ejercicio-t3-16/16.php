<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-16</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-16</h1>
    <p>Escribe un programa que diga si un número introducido por teclado es o no primo.
        Un número primo es aquel que sólo es divisible entre él mismo y la unidad.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="n"><br />
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php if(isset($_POST['Enviar']) && is_numeric($_POST['n'])):
        $n = $_POST['n'] - 1;
        $primo = true;
        while($n >= 2):            
            if($_POST['n']%$n==0):
                $primo = false;
            break;
            endif;
            $n--;
        endwhile;
        if($primo && $_POST['n']!=0 && $_POST['n']!=1):
            echo "Es Primo";
        else:
            echo "No es Primo";
        endif;
    endif;?>
</body>

</html>