<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-12</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-12</h1>
    <p>Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso.
        Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. Pásale el
        minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las
        diferentes asignaturas del curso.</p>
    <?php
    $preguntas =[
        "pregunta0" => ["respuesta1", True, "respuesta2", False],
        "pregunta1" => ["respuesta1", True, "respuesta2", False],
        "pregunta2" => ["respuesta1", False, "respuesta2", True, "respuesta3", False],
        "pregunta3" => ["respuesta1", True, "respuesta2", False],
        "pregunta4" => ["respuesta1", False, "respuesta2", True],
        "pregunta5" => ["respuesta1", True, "respuesta2", False],
        "pregunta6" => ["respuesta1", False, "respuesta2", False, "respuesta3", False, "respuesta4", True],
        "pregunta7" => ["respuesta1", True, "respuesta2", False],
        "pregunta8" => ["respuesta1", False, "respuesta2", True, "respuesta3", False, "respuesta4", False, "respuesta5", False],
        "pregunta9" => ["respuesta1", True, "respuesta2", False]
    ];
    echo "\n<br/>";
    if(isset($_POST['Enviar'])){        
        //echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";
        $puntos = 0;
        $cont = 0;
        foreach($preguntas as $pregunta => $respuesta){
            echo $cont, ". ";
            echo $pregunta, ": <span";            
            if(isset($_POST[$cont])) {
               if($respuesta[$_POST[$cont] + 1]){
                   $puntos++;
                } else echo " style='color: red'";
                echo ">";
                echo $respuesta[$_POST[$cont]], "</span>\n<br/>\n<br/>";                
            } else {
                echo " style='color: red'>No contestada</span>\n<br/>\n<br/>";
            }
            $cont++;
        }
        echo "\nPreguntas correctas: ", $puntos;
        echo "\n<br>";
        echo "\n<button onclick='location.href=\"", $_SERVER['PHP_SELF'], "\"'>Repetir Test</button>";
    } else { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <?php
        $cont = 0;
        foreach ($preguntas as $pregunta => $respuesta) { ?>
        <label><?php echo $cont + 1, ". ", $pregunta, ".", "\n<br/>";?></label>
        <label>
            <ul>
                <?php $indice = 0;
                foreach($respuesta as $opcion) {                    
                    if(gettype($opcion)!="boolean"){ ?>
                <li style="list-style-type: lower-latin;">
                    <input type="radio" name="<?php echo $cont?>" value="<?php echo $indice?>">
                    <?php
                            echo " ", $opcion;
                            $indice = $indice + 2;
                        ?>
                </li>
                <?php } 
                } ?>
            </ul>
            <hr>
        </label>
        <?php $cont++;
        } ?>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <?php } ?>
    <p>
    </p>
</body>

</html>