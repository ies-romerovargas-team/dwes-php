<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-24</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-24</h1>
  <p>Escribe un programa que lea un número N e imprima una pirámide de números con N filas como
   en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier
   para que los espacios tengan la misma anchura que los números.</p>
   <pre>
    Pirámide para N = 5

        1
       121
      12321
     1234321
    123454321
   </pre>
  <hr>  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="altura"/>
    <input type="submit" name="Enviar" value="Enviar"/>
  </form>
  <hr>
  <?php  
  if(isset($_POST['Enviar'])):
    $h = $_POST['altura'];
    echo "<pre>";
    for($i = 0; $i < $h; $i++):
      //espacios
      for($j = 1; $j < ($h- $i); $j++):
        echo " ";
      endfor;
      //numeros orden asc
      for($j = 0; $j < ($i + 1); $j++):
        echo $j + 1;
      endfor;
      //numeros orden desc
      for($j = $i; $j >= 1; $j--):
        echo $j;
      endfor;
      echo "<br/>";
    endfor;
    echo "</pre>";
  endif;
  ?>
</body>
</html>