<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T2-01</title>
</head>
<body>
    <p><a href="/index.php">Inicio</a></p>
    <p>Escribe un programa que pida por teclado un día de la semana y
    que diga qué asignatura toca a primera hora ese día.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label>Selecciona un día de la semana:
        <select name="dia">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
        </select>
        </label>
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <p>
    <?php
        if(isset($_POST['Enviar'])){
            echo $_POST['dia'],": ";
            switch($_POST['dia']){
                case "Lunes":
                    echo "Desarrollo Web en entorno Cliente";
                break;
                case "Martes":
                    echo "Empresas e Iniciativa Emprendedora";
                break;
                case "Miercoles":
                    echo "Desarrollo Web en entorno Servidor";
                break;
                case "Jueves":
                    echo "Despliege de aplicaciones Web";
                break;
                case "Viernes":
                    echo "Diseño de Interfaces";
                break;                    
            }
        }
    ?>
    </p>
</body>
</html>