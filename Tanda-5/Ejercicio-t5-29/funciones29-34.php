<?php
function generaArrayBiInt($n, $m, $min, $max){
  $a = array();
  for($i=0; $i < $n; $i++):
    for($j=0; $j < $m; $j++):
      $a[$i][$j] = rand($min, $max);
    endfor;
  endfor;
  return $a;
}

function printArray($a){
  for($i=0; $i < count($a); $i++):    
      echo $a[$i], " ";
  endfor;
}

function printArrayBi($a){
  for($i=0; $i < count($a); $i++):
    for($j=0; $j < count($a[$i]); $j++):
      echo $a[$i][$j], " ";
    endfor;
    echo "<br>";
  endfor;
}

function filaDeArrayBiInt($a, $fila){  
  if($fila<count($a[0])):
    return $a[$fila];
  endif;
}

function columnaDeArrayBiInt($a, $col){
  $b = array();
  for($i=0; $i < count($a); $i++):
    $b[] = $a[$i][$col];
  endfor;
  return $b;
}

function coordenadasEnArrayBiInt($a, $n){
  $b = [-1, -1];
  for($i=0; $i < count($a); $i++):
    for($j=0; $j < count($a[$i]); $j++):
      if($a[$i][$j] == $n):
        $b[0] = $i;
        $b[1] = $j;
      endif;
    endfor;
  endfor;
  return $b;
}

function esPuntoDeSilla($a, $n){
  $b = coordenadasEnArrayBiInt($a,$n);
  if($b[0]!=-1):
    $ma = -PHP_INT_MAX;
    for($i=0; $i < count($a); $i++):
      if($a[$i][$b[1]]>$ma) $ma = $a[$i][$b[1]];
    endfor;
    $mi = PHP_INT_MAX;
    for($i=0; $i < count($a[0]); $i++):
      if($a[$b[0]][$i]<$mi) $mi = $a[$b[0]][$i];
    endfor;
    if($n==$ma && $n==$mi) return true;
  endif;
  return false;
}

function diagonal($a, $fil, $col, $dir){
  $b = count($a); // filas
  $c = count($a[0]); // columnas
  /*
      0       1        2        3        4        5        6
  0  0,0 0   0,1 -1   0,2 -2   0,3 -3   0,4 -4   0,5 -5   0,6 -6
  1  1,0 1   1,1  0   1,2 -1   1,3 -2   1,4 -3   1,5 -4   1,6 -4
  2  2,0 2   2,1  1   2,2  0   2,3 -1   2,4 -2   2,5 -3   2,6 -4
  3  3,0 3   3,1  2   3,2  1   3,3  0   3,4 -1   3,5 -2   3,6 -3
  4  4,0 4   4,1  3   4,2  2   4,3  1   4,4  0   4,5 -1   4,6 -2

      0        1       2        3      4        5        6
  0  0,0  0   0,1 1   0,2 2   0,3 3   0,4 4   0,5 5   0,6 -6
  1  1,0 -1   1,1 0   1,2 3   1,3 4   1,4 5   1,5 6   1,6 -4
  2  2,0 -2   2,1 -1  2,2 4   2,3 5   2,4 6   2,5 7   2,6 -4
  3  3,0 -3   3,1 -2  3,2 5   3,3 6   3,4 7   3,5 8   3,6 -3
  4  4,0 -4   4,1 -3  4,2 6   4,3 7   4,4 8   4,5 9   4,6 -2
  */

}

function generaArrayInt($n, $min, $max){
  $a = array();
  for($i=0; $i < $n; $i++):
    $a[] = rand($min, $max);
  endfor;
  return $a;
}

function minimoArrayInt($a){
  $min = PHP_INT_MAX;
  foreach($a as $v):
    if($v < $min) $min = $v;
  endforeach;
  return $min;
}

function maximoArrayInt($a){
  $max = - PHP_INT_MAX;
  foreach($a as $v):
    if($v > $max) $max = $v;
  endforeach;
  return $max;
}

function mediaArrayInt($a){
  $i = $sum = 0;
  foreach($a as $v):
    $i++;
    $sum += $v;
  endforeach;
  return $v/$i;
}

function estaEnArray($a, $n){
  foreach($a as $v):
    if($n == $v) return true;
  endforeach;
  return false;
}

function posicionEnArray($a, $n){
  if(estaEnArray($a,$n)):
    foreach($a as $key => $v):
      if($n == $v) return $key;
    endforeach;
  endif;
  return -1;
}

function volteaArrayInt(&$a){  
  $i = $j = count($a);
  foreach($a as $key => $value):
    $aux = $a[$i-1];
    $a[$i - 1] = $value;
    $a[$key] = $aux;
    $i--;
    if($i <= $j/2) break;
  endforeach;  
}

function rotaDerechaArrayInt1($a){  
  $p = $a[0];
  for($i=1; $i< count($a); $i++):
    $aux = $a[$i];
    $a[$i] = $p;
    $p = $aux;
  endfor;
  $a[0] = $p;
  return $a;
}

function rotaDerechaArrayInt(&$a, $n){  
  for($i=0;$i<$n;$i++):    
    $a = rotaDerechaArrayInt1($a);
  endfor;
}

function rotaIzquierdaArrayInt1($a){
  $p = $a[count($a)-1];
  for($i = count($a)-1; $i>= 0; $i--):
    $aux = $a[$i];
    $a[$i] = $p;
    $p = $aux;
  endfor;
  $a[count($a)-1] = $p;
  return $a;
}

function rotaIzquierdaArrayInt(&$a, $n){  
  for($i=0;$i<$n;$i++):    
    $a = rotaIzquierdaArrayInt1($a);
  endfor;
}