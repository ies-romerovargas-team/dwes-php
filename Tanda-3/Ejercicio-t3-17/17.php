<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-17</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-17</h1>
    <p>Realiza un programa que sume los 100 números siguientes a un número entero y positivo
        introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
        positivo).</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="n"><br />
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php if(isset($_POST['Enviar'])):
        if(is_numeric($_POST['n']) && $_POST['n']>0):
            $n = $_POST['n'];
            $suma = 0;
            for ($i = $n; $i < $n+100; $i++):
                $suma = $suma + $i;
            endfor;
            echo $suma;
        else:
            echo "El número no es válido";
        endif;
    endif;?>
</body>

</html>