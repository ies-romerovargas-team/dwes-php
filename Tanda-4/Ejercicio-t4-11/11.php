<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-11</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-11</h1>
  <p>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción). Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra en español y dará la correspondiente traducción en inglés.</p>

<?php
  
  $diccionario = [
    ""
  ];
  foreach($palos as $palo):
    foreach($numeros as $key => $numero):
      $cartas[][] = $key . '/'. $palo;
      $cartas[array_key_last($cartas)][1]= $numero;
    endforeach;
  endforeach;
  /*
  echo "<pre>";
  print_r($cartas);
  echo "</pre>";
  */
  for($i=0; $i<10; $i++):  
    $a = rand(0, count($cartas) - 1);  
    $elegida[][] = $cartas[$a];    
    unset($cartas[$a]);
    $cartas = array_values($cartas);
    echo "<br>&nbsp;&nbsp;",$elegida[$i][0][0], " ";
    echo $elegida[$i][0][1], " ";  
  endfor;
  /*
  echo "<pre>";
  print_r($cartas);
  echo "</pre>";
  */
  $punt = 0;
  foreach($elegida as $key => $puntos):
    $punt += $puntos[0][1];
  endforeach;
  echo "<br/><br/> Puntos:", $punt;
?>
</body>
</html>