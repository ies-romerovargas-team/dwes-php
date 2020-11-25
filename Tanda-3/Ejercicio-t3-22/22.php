<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-22</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-22</h1>
  <p>Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.</p>
  <hr>
  <?php
  for($i = 2; $i <= 100; $i++):
    $j = $i - 1;
    $primo = true;
    while($j > 1):
      if($i%$j == 0):
        $primo = false;      
      endif;
      if(!$primo) break;
      $j--;
    endwhile;
    if($primo) echo $i, " ";
  endfor;
  ?>  
</body>
</html>