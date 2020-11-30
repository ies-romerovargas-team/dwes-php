<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-15</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-15</h1>
  <p>Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una
    posición en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas
    y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz
    original como la matriz resultado, ambas con los números convenientemente alineados.</p>
  <?php
  /*
inicial
  0000
  1111
  2222
  3333
  
final
  3210
  3210
  3210
  3210

  */
  $min = PHP_INT_MAX;
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