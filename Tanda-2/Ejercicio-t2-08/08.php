<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-08</title>
</head>
<body>
    <p><a href="../../index.php">Inicio</a></p><h1>Ejercicio T2-08</h1>
    <p>Amplía el programa anterior para que diga la nota del boletín (insuficiente, 
    suficiente, bien, notable o sobresaliente).</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduzca notas:
            N1: <input type="number" name="n1" max="10">
            N2: <input type="number" name="n2" max="10">
            N3: <input type="number" name="n3" max="10">
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            echo "La nota media de ", $n1,", ", $n2, " y de ", $n3," es ";
            $media = media($n1, $n2, $n3);
            echo "(", $media, ") ", boletin($media);

        }

        function media($a, $b, $c){
            return round(($a + $b + $c)/3, 2);
        }

        function boletin($nota){
            if($nota<5){
                return "Insuficiente";
            } elseif($nota<6.5){
                return "Suficiente";
            } elseif($nota<7.5){
                return "Bien";
            } elseif($nota<8.5){
                return "Notable";
            } else return "Sobresaliente";
        }
    ?>
    </p>
</body>
</html>