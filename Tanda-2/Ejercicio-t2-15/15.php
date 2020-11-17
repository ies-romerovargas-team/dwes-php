<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-15</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T2-15</h1>
    <p>Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo infiel.
        El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes utilizar
        radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas contestadas con
        falso no suman puntos. Utiliza el fichero test_infidelidad.txt para obtener las preguntas y las conclusiones
        del programa.</p>

    <?php 
    $preguntas = ["Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.",
    "Ha aumentado sus gastos de vestuario",
    "Ha perdido el interés que mostraba anteriormente por ti",
    "Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer)",
    "No te deja que mires la agenda de su teléfono móvil", 
    "A veces tiene llamadas que dice no querer contestar cuando estás tú delante", 
    "Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a", 
    "Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo", 
    "Has notado que últimamente se perfuma más", 
    "Se confunde y te dice que ha estado en sitios donde no ha ido contigo"]
    ?>
    <h2>Test de Infidelidad</h2>
    <?php if(isset($_POST["Enviar"])) { ?>
    <h3>Resultado del test</h3>
    <?php 
    $puntos = 0;
    foreach($_POST as $respuestas => $respuesta){ 
        if($respuesta==0) $puntos = $puntos + 3;
    } 
    echo "\n<p>Puntos obtenidos ", $puntos, "</p>";
    echo "<p>";
    if($puntos<=10){
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    } elseif ($puntos<=21){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    } else {
        echo "Tu pareja tiene todos los ingredientes de estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües qué es lo que está pasando por su cabeza.";
    }
    echo "</p>";
    echo "\n<br>";
    echo "\n<button onclick='location.href=\"", $_SERVER['PHP_SELF'], "\"'>Repetir Test</button>";
    ?>
    <?php } else { ?>
    <h3>Preguntas</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <?php
            $cont = 0;
            foreach ($preguntas as $pregunta) { ?>
        <label><?php echo $cont + 1, ". ", $pregunta, ".", "\n<br/>";?></label>
        <ul>
            <li style="list-style-type: lower-latin;">
                <input type="radio" name="r<?php echo $cont?>" value="0" required>Verdadero
            </li>
            <li style="list-style-type: lower-latin;">
                <input type="radio" name="r<?php echo $cont?>" value="1">Falso
            </li>
        </ul>
        <?php $cont++;
            } ?>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <?php } ?>
</body>

</html>