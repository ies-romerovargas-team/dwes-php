<?php include "../Ejercicio-t5-01/funciones1-14.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-15</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-15</h1>
  <p>Muestra los números primos que hay entre 1 y 1000.</p>
  <?php    
    $i = 1;
    while($i<1000):
      if(esPrimo($i)):          
        echo $i," ";
      endif;
      $i++;
    endwhile;
  ?>

</body>

</html>