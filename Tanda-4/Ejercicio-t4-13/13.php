<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-13</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-13</h1>
  <p>Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos
    comprendidos entre 100 y 999 (ambos inclusive). Todos los números deben ser distintos, es decir,
    no se puede repetir ninguno. Muestra a continuación por pantalla el contenido del array de
    tal forma que se cumplan los siguientes requisitos:</p>
  <ul>
    <li>Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.</li>
    <li>El mínimo debe aparecer en color azul.</li>
    <li>El resto de números debe aparecer en color negro.</li>
  </ul>
  <?php
  $min = 999;
  $fila = 0;
  $columna = 0;
  $array = array();
  for($i=0; $i<6; $i++):
    for($j=0; $j<9; $j++):
      $r = rand(100,999);      
      while(in_array($r, $array)):
        $r = rand(100,999); 
      endwhile;
      if($r < $min):
        $min = $r;
        $fila = $i;
        $columna = $j;      
      endif;
      $array[$i][$j] = $r;
      $color[$i][$j] = "black";
    endfor;
  endfor;
  // azul
  $color[$fila][$columna] = "blue";
  // verdes
  // \.
  $f = $fila;
  $c = $columna;
  while (($f + 1 <= 6) && ($c + 1 <= 9)):
    $color[++$f][++$c] = "green";
  endwhile;
  // .\
  $f = $fila;
  $c = $columna;
  while (($f - 1 >= 0) && ($c - 1 >= 0)):
    $color[--$f][--$c] = "green";
  endwhile;
  // /.
  $f = $fila;
  $c = $columna;
  while (($f - 1 >= 0) && ($c + 1 <= 9)):
    $color[--$f][++$c] = "green";
  endwhile;
  // ./
  $f = $fila;
  $c = $columna;
  while (($f + 1 <= 9) && ($c-1 >= 0)):
    $color[++$f][--$c] = "green";
  endwhile;
  ?>
  <table>
    <?php for($i=0; $i<6; $i++):?>
    <tr>
      <?php for($j=0; $j<9; $j++):?>
      <td style="color: <?=$color[$i][$j]?>"><?=$array[$i][$j]?></td>
      <?php endfor;?>
    </tr>
    <?php endfor;?>
  </table>
</body>

</html>