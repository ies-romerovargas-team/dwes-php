<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-18</title>
    <style>
    span {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-18</h1>
    <p>Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos
        por teclado y validados como distintos, el programa debe empezar por el menor de los enteros
        introducidos e ir incrementando de 7 en 7.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="n1"><br />
        <input type="number" name="n2"><br />
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php if(isset($_POST['Enviar'])):        
        if($_POST['n1'] != $_POST['n2']):            
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $menor = $n1<$n2 ? $n1 : $n2;
            $mayor = $n1>$n2 ? $n1 : $n2;
            echo "<span>", $menor, "</span> ";
            for ($i = $menor + 7; $i < $mayor; $i = $i + 7):
                echo $i, " ";
            endfor;
            echo "<span>", $mayor, "</span>";
        else:
            echo "Los números son iguales";
        endif;
    endif;?>
</body>

</html>