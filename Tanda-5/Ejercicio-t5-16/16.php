<?php include "../Ejercicio-t5-01/funciones1-14.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-16</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-16</h1>
  <p>Muestra los números capicúa que hay entre 1 y 99999.</p>
  <?php    
  $i=0;
  while($i<99999):
     if(esCapicua($i)):
      echo $i," ";
     endif;
     $i++;
  endwhile;
  // adivino
  // antireloj
  // DisFruta
  ?>

</body>

</html>