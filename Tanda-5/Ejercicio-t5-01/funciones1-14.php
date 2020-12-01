<?php

function esCapicua($n){
  $n = abs($n);
  $c = pow(10, floor(log($n,10)));
  while($c>=10):
    $last = $n%10;
    $first = floor($n/$c);    
    $n = $n - ($first * $c);
    $n = floor($n / 10);
    if($first!=$last) return false;
    $c = $c / 100;
  endwhile;
  return True;
}

function esPrimo($n){
  $i = $n-1;
  while($i >= 2):            
    if($n%$i==0):
      return false;      
    endif;
    $i--;
  endwhile;
  return true;
}

function siguientePrimo($n){
  while(!esPrimo(++$n)):
    if($n==PHP_INT_MAX) return 0;
  endwhile;
  return $n;
}

function potencia($b, $e){
  return pow($b, $e);
}

function digitos($n){
  return $c = floor(log($n,10)) + 1;
}

function voltea($n){
  $n = abs($n);
  $c = pow(10, digitos($n) - 1);
  $new = 0;
  while($c>=1):    
    $last = $n%10;    
    $new += $last * $c;    
    $n = floor($n / 10);
    $c = $c/10;
  endwhile;
  return $new;
}

function digitoN($n, $pos){
  $n = abs($n);
  $c = digitos($n);
  if($pos>$c):    
    return -1;
  endif;
  $c = pow(10, digitos($n) - 1);
  for($i=0; $i<$pos; $i++):
    $first = floor($n/$c);
    $n = $n - ($first * $c);
    $c = $c / 10;
  endfor;
  return floor($n/$c);
}

function posicionDeDigito($n, $d){
  $n = abs($n);
  $d = abs($d);
  $t = digitos($n);
  $i = 0;
  $c = pow(10, digitos($n) - 1);
  while($i<$t):
    $first = floor($n/$c);
    if($d==$first) return $i;
    $n = $n - ($first * $c);
    $c = $c/10;    
    $i++;
  endwhile;
  return -1;
}

function quitaPorDetras ($n, $q){
  $n = abs($n);
  $q = abs($q);
  $i = 0;
  while($i<$q):
    $last = $n%10;    
    $n = floor($n / 10);    
    $i++;
  endwhile;
  return $n;
}

function quitaPorDelante ($n,$q){
  return voltea(quitaPorDetras(voltea($n),$q));
}

function pegaPorDetras($n, $d){
  return $n * 10 + $d;
}

function pegaPorDelante($n, $d){
  $c = pow(10, digitos($n) - 1);
  return $d*$c*10 + $n;
}

function trozoDeNumero($n, $i, $f){  
  $d = digitos($n);
  if($f > $i && $d > $f):    
    $final = ($d - $f - 1)>0 ? $d - $f -1 : 0;    
    $n = quitaPorDelante($n, $i);
    $n = quitaPorDetras($n, $final);    
  endif;
  return $n;
}

function juntaNumeros($n, $m){
  $c = pow(10, digitos($m));
  return $n * $c + $m;
}