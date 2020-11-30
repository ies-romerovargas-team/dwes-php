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

33 	58 	48 	15 	75 	87 	17 	98 	95 	31 	36 	90
78 	70 	25 	87 	71 	35 	14 	29 	48 	75 	86 	73
44 	98 	76 	18 	46 	80 	10 	11 	91 	83 	23 	93
91 	24 	93 	49 	28 	84 	61 	47 	82 	94 	45 	19
31 	51 	96 	95 	24 	99 	33 	62 	17 	68 	13 	10
20 	83 	14 	47 	21 	54 	68 	69 	97 	38 	26 	38
49 	36 	20 	34 	37 	82 	50 	33 	20 	92 	52 	72
14 	84 	52 	62 	91 	22 	73 	77 	70 	26 	73 	83
63 	77 	21 	20 	57 	54 	12 	64 	98 	60 	45 	85
12 	61 	36 	42 	54 	52 	53 	87 	52 	71 	31 	98
31 	93 	34 	98 	37 	91 	65 	42 	71 	90 	47 	73
66 	89 	37 	98 	91 	92 	21 	34 	99 	11 	41 	98

78  33 	58 	48 	15 	75 	87 	17 	98 	95 	31 	36 	
44 	70 	25 	87 	71 	35 	14 	29 	48 	75 	86 	90
91 	98 	76 	18 	46 	80 	10 	11 	91 	83 	23 	73
31 	24 	93 	49 	28 	84 	61 	47 	82 	94 	45 	93
20 	51 	96 	95 	24 	99 	33 	62 	17 	68 	13 	19
49 	83 	14 	47 	21 	54 	68 	69 	97 	38 	26 	10
14 	36 	20 	34 	37 	82 	50 	33 	20 	92 	52 	38
63 	84 	52 	62 	91 	22 	73 	77 	70 	26 	73 	72
12 	77 	21 	20 	57 	54 	12 	64 	98 	60 	45 	83
31 	61 	36 	42 	54 	52 	53 	87 	52 	71 	31 	85
66 	93 	34 	98 	37 	91 	65 	42 	71 	90 	47 	98
89 	37 	98 	91 	92 	21 	34 	99 	11 	41 	98 	73
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
    for($j=11-$fil; $j>=$topColLeft; $j--):
      $array2[$i][] = $array1[11-$fil][$j];
    endfor;
    for($j=11-$col; $j>=$topFilUp; $j--):
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
    $aux1 = $array2[$i][0];
    for($j=1; $j<count($array2[$i]); $j++):
      $aux = $array2[$i][$j];
      $array2[$i][$j] = $aux1;
      $aux1 = $aux;
    endfor;
    $array2[$i][0] = $aux1;
  endfor;
  // montamos de nuevo la matriz
  for($i=0; $i<5; $i++):
    $fil=$i;
    $col=$i;
    $topColRight = 11 - $i;
    $topFilDown = 11 - $i;
    $topColLeft = $i;
    $topFilUp = $i + 1;
    foreach($array2[$i] as $value):
      $array1[$fil][$col] = $value;
      if($col<$topColRight):
        $col++;
      else:
        if($fil<=$topFilDown):
          $fil++;
        else:
          if($col>$topColLeft):
            $col--;
          else:
            if($fil>=$topFilUp):
              $fil--;
            endif;
          endif;
        endif;
      endif;
    endforeach;
  endfor;
  
  for($i=0; $i<5; $i++):
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
    for($j=11-$fil; $j>=$topColLeft; $j--):
      $array2[$i][] = $array1[11-$fil][$j];
    endfor;
    for($j=11-$col; $j>=$topFilUp; $j--):
      $array2[$i][] = $array1[$j][$fil];
    endfor;
  endfor;
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