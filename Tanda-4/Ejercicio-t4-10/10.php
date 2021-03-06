<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-10</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-10</h1>
  <p>Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga
   cuántos puntos suman según el juego de la brisca. Emplea un array asociativo para 
   obtener los puntos a partir del nombre de la figura de la carta. Asegúrate de que no 
   se repite ninguna carta, igual que si las hubieras cogido de una baraja de verdad.</p>

<?php
  $numeros = ["1" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, "6" => 0, "7" => 0, "Sota" => 2, "Caballo" => 3, "Rey" => 4];
  $palos = ["oros", "copas", "bastos", "espadas"];
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