<?php

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