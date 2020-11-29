<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-07</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-07</h1>
  <p>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los
   almacene en un array. El programa debe ser capaz de pasar todos los números pares a las
    primeras posiciones del array (del 0 en adelante) y todos los números impares a las 
    celdas restantes. Utiliza arrays auxiliares si es necesario.</p>
  <?php
    for($i=0;$i<20;$i++):
      $array[] = rand(0,100);
    endfor;
    echo "<div style='float:left'>";
    echo "<pre>";
    print_r($array);    
    echo "</pre>";
    echo "</div>";
    foreach ($array as $key => $value):
      if($value%2==0):
        $arrayPar[] = $value;
      else:
        $arrayImpar[] = $value;
      endif;
    endforeach;
    $i=0;
    foreach ($arrayPar as $key => $value) {
      $array[$i++]=$value;      
    }
    foreach ($arrayImpar as $key => $value) {
      $array[$i++]=$value;      
    }
    echo "<div style='float:left'>";
    echo "<pre>";
    print_r($array);    
    echo "</pre>";
    echo "</div>";
  ?>
</body>

</html>