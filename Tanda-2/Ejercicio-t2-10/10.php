<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-10</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-10</h1>
    <p>Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Introduce tu día y mes de nacimiento</br>
            dia <input type="number" name="dia" max="31">
            mes <select name="mes">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
        <?php
        if(isset($_POST['Enviar'])){
            $horroroscopo = ["Aries" => [21,3,20,4],
                "Tauro" => [21,4,20,5],
                "Géminis" => [21,5,20,6],
                "Cáncer" => [21,6,20,7],
                "Leo" => [21,7,21,8],
                "Virgo" => [22,8,22,9],
                "Libra" => [23,9,22,10],
                "Escorpio" => [23,10,22,11],
                "Sagitario" => [23,11,20,12],
                "Capricornio" => [21,12,19,1],
                "Acuario" => [20,01,18,02],
                "Piscis" => [19,02,20,03]
            ];
            $meses31 = [1,3,5,7,8,10,12];        
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $error = True;
            if($dia==31 && in_array($dia, $meses31) || $dia < 31){
                if($dia==30 && $mes!=2 || $dia < 30) {                                        
                    foreach($horroroscopo as $nombre => $signo){                                                                        
                        if(($mes==$signo[1] && $dia>=$signo[0]) || $mes==$signo[3] && $dia<=$signo[2]){
                            echo $dia, "/", $mes," => <b>",$nombre,"</b>";
                        }
                    }
                    $error = False;
                }
            }
            if($error) echo "Las fechas no son correctas";
        }
    ?>
    </p>
</body>

</html>