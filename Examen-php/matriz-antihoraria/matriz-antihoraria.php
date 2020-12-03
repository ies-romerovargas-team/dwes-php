<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-15</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Examen</h1>
  <p></p>
  <?php
/* estrategia:
Crear un segundo array (array2) que contiene todos los elementos contenidos en cada una de las circunferencias que forman la matriz (array1).
Este segundo array tendrá por tanto 6 filas, con distintos números de elementos según sea la distancia al centro
array2[0] => 44 elementos
array2[1] => 36 elementos
array2[2] => 28 elementos
array2[3] => 20 elementos
array2[4] => 12 elementos
array2[5] => 4 elementos
Despues se "rotan" por separado los elementos de cada fila de array2
Por último, en un proceso inverso al primero, se recolocan los elementos de array2 en array1
*/
  ?>
  <div style="float:left; border:1px solid black;">
    <table>
      <?php for($i=0; $i<12; $i++):?>
      <tr>
        <?php for($j=0; $j<12; $j++):?>
        <?php $array1[$i][$j] = rand(10,99);?>
        <td><?=$array1[$i][$j]?></td>
        <?php endfor;?>
      </tr>
      <?php endfor;?>
    </table>
  </div>
  <div style="float:left; margin-left:20px; border:1px solid red">
    <?php for($i=0; $i<5; $i++):
    $fil = $i;
    $col = $i;
    $topColRight = 11 - $i;
    $topFilDown = 11 - $i;
    $topColLeft = $i;
    $topFilUp = $i + 1;    
    for($j=$fil; $j<=$topColRight; $j++):
      $array2[$i][] = $array1[$fil][$j];      
    endfor;
    for($j=$col + 1; $j<=$topFilDown; $j++):
      $array2[$i][] = $array1[$j][11-$col];
    endfor;
    for($j=11-$i-1; $j>=$topColLeft; $j--):
      $array2[$i][] = $array1[11-$fil][$j];
    endfor;
    for($j=11-$i-1; $j>=$topFilUp; $j--):
      $array2[$i][] = $array1[$j][$fil];      
    endfor;
  endfor;
  // ultimo caso
  $array2[5][] = $array1[5][5];
  $array2[5][] = $array1[5][6];
  $array2[5][] = $array1[6][6];
  $array2[5][] = $array1[6][5];
  //Rotamos los 6 arrays
  for($i=0; $i<6; $i++):    
    $indice = 0;
    $ultimo = $array2[$i][0];
    for($j=0; $j<count($array2[$i])-1; $j++):
      $aux = $array2[$i][$j + 1];      
      $array2[$i][$j] = $aux;
      $indice = $j;
    endfor;
    $array2[$i][$indice+1] = $ultimo;
  endfor;
  // montamos de nuevo la matriz
  for($i=0; $i<5; $i++):
    $fil = $i;
    $col = $i;
    $topColRight = 11 - $i;
    $topFilDown = 11 - $i;
    $topColLeft = $i;
    $topFilUp = $i + 1;
    $direccion = 0;
   
    foreach($array2[$i] as $value):      
      $array1[$fil][$col] = $value;

      if($direccion == 0){
        if($col<$topColRight):
          $col++;
        else:          
          $direccion = 1;
        endif;
      }

      if($direccion == 1){
        if($fil<$topFilDown):
          $fil++;
        else:
          $direccion = 2;          
        endif;
      }
      
      if($direccion == 2){
        if($col>$topColLeft):
          $col--;
        else:
          $direccion = 3;
        endif;
      }
      
      if($direccion == 3){
        if($fil>$topFilUp):
          $fil--;
        else:
          $direccion = 0;
        endif;
      }      
    endforeach;
  endfor;
  // ultimo caso
  $array1[5][5] = $array2[5][0];
  $array1[5][6] = $array2[5][1];
  $array1[6][6] = $array2[5][2];
  $array1[6][5] = $array2[5][3];
  ?>
    <table>
      <?php for($i=0; $i<12; $i++):?>
      <tr>
        <?php for($j=0; $j<12; $j++):?>
        <td><?=$array1[$i][$j]?></td>
        <?php endfor;?>
      </tr>
      <?php endfor;?>
    </table>
  </div>
</body>

</html>