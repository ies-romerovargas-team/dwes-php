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
        "En Java ¿Qué es JSON?" => 
        ["Un formato ligero para el intercambio de datos", True, "Tecnología con la finalidad de facilitar la integración en la misma página web de servicios y aplicaciones a priori independientes.", False,
        "Servicios interactivos en red dando al usuario el control de los datos", False, "Componentes modulares de interfaz de usuario gestionados y visualizados en un portal web", False],
        "Un intérprete es:" => 
        ["Un programa que convierte un texto de un idioma a otro", False, "El módulo de los programas gráficos que transporta los valores numéricos a puntos en pantalla", False, 
        "Un traductor de lenguaje de programación de alto nivel que traduce y ejecuta el programa al mismo tiempo", True, "Un lenguaje que detecta errores de interpretación", False],
        "La especificación de formato de documentos HTML, Hypertext Markup Language, es un subconjunto de las normas:" => 
        ["De programación que rigen en Internet.", False, "SGML (Standarized General Markup Language)", True, 
        "De interoperabilidad entre páginas web", False, "Es un lenguaje de programación en sentido puro", False],
        "El lenguaje HTML permite la organización de una página Web en distintos marcos. ¿Qué etiquetas de HTML se utilizan para este propósito?" => 
        ["FRAME, SUBFRAME", False, "FRAME, FRAMESET", True, "FRAME, junto con los atributos ROWS y COLS", False, "FRAME, TRFRAME y TDFRAME", False],
        "En un documento XML, la parte donde se definen los enlaces a otros documentos, código ejecutable, etc es:" => 
        ["DTD", False, "XSL", False, "XLL", True, "DHTML", False],
        "El script integrado en una página web que realiza una serie de operaciones en función de los datos introducidos por el usuario y que se ejecuta en el servidor son" => 
        ["Programas Javascript", False, "Scripts CGI", False, "Páginas dinámicas.", True, "Modulación de resultados"],
        "Cuál de las siguientes afirmaciones sobre XML es correcta?" => 
        ["XML es la implementación propietaria de Xerox de HTML, que incorpora multicasting.", False, "XML es una extensión, en formato fijo, del conocido lenguaje HTML", False, 
        "XML es el estándar para embeber módulos de acceso a datos y bases de datos en páginas web creadas con HTML", False, "XML es un metalenguaje, que está escrito en SGML, y se usa para definir otros lenguajes", True],
        "¿Qué es Javascript?" => 
        ["Un compilador de Java.", False, "Un generador de applets Java", False,
        "Un applet Java que se ejecuta de forma embebida desde un lenguaje de script.", False, "Un lenguaje de script basado en la sintaxis de Java.", True],
        "El lenguaje PHP (Hypertext Preprocessor), utilizado para la programación en Internet" => 
        ["Es un lenguaje de scripting orientado a objetos que permite integrarse en páginas HTML facilitando la creación de páginas dinámicas al ejecutarse en el cliente", False, 
        "Es un lenguaje de scripting, embebido en páginas HTML que se ejecuta en el servidor", True, " Es un lenguaje de programación, y el resultado de la compilación genera ficheros XML, que son transmitidos y ejecutados en el cliente", False, 
        "Permite la implementación de aplicaciones sobre PPP, el protocolo para la transmisión de paquetes IP sobre líneas de comunicación de tipo serie", False],
        "¿En una misma página web es posible introducir código en lenguajes PHP, Javascript y VBScript?:" => 
        ["Sí", True, "No, ya que no se pueden mezclar distintas tecnologías de script", False, "No porque se trata de lenguajes de cliente y servidor.", False,
        "Ninguna de las anteriores es correcta", False]
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
            echo "<hr>\n";
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