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

function toDecimal($b){
  // BINARY TO DECIMAL
  for($i=0;$i<strlen($b);$i++):
    if($b[$i]!='0' && $b[$i]!='1'):
      return -1;
    endif;
  endfor;
  $dec = 0;
  $j = 0;
  for($i=strlen($b)-1; $i>=0; $i--):
    $digito = $b[$i];
    if($digito==1):
      $exp = pow(2, $j);
      $dec += $exp;
    endif;
    $j++;
  endfor;
  return $dec;
}

function toBinary($d){
  // DECIMAL TO BINARY
  $d = intval($d);
  if(is_numeric($d)):
    $bin = "";    
    while($d>0):
      $bin = ($d%2)."".$bin;
      $d = floor($d/2);
    endwhile;      
    return $bin;
  else:
    return -1;
  endif;
}

function HexToBinary($h){
  // HEX TO BINARY
  $h = strtoupper($h);
  $nh = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"];
  $nb = ["0000", "0001", "0010", "0011", "0100", "0101", "0110", "0111", "1000", "1001", "1010", "1011", "1100", "1101", "1110", "1111"];
  for($i=0; $i<strlen($h); $i++):
    if(!in_array($h[$i], $nh)):
      return -1;
    endif;
  endfor;
  $bin = "";
  for($i=0; $i<strlen($h); $i++):
    $bin = $bin . $nb[array_search($h[$i],$nh)];
  endfor;
  // Quitar 0 izquierda:
  while($bin[0]=="0"):
    $bin = substr($bin,1);
  endwhile;
  return $bin;
}

function OctToBinary($o){
  // OCTAL TO BINARY
  if(is_numeric($o)):
    $no = [0, 1, 2, 3, 4, 5, 6, 7];
    $nb = ["000", "001", "010", "011", "100", "101", "110", "111"];
    $os = strval($o);
    for($i=0; $i<strlen($os); $i++):
      if(!in_array($os[$i], $no)):
        return -1;
      endif;
    endfor;
    $bin = "";
    for($i=0; $i<strlen($os); $i++):
      $bin = $bin . $nb[array_search($os[$i],$no)];
    endfor;
    // Quitar 0 izquierda:
    while($bin[0]=="0"):
      $bin = substr($bin,1);
      if(strlen($bin)==1) break;
    endwhile;
    return $bin;
  else:
    return -1;
  endif;
}

function toHexadecimal($b){
  // BINARY TO HEX
  for($i=0;$i<strlen($b);$i++):
    if($b[$i]!='0' && $b[$i]!='1'):
      return -1;
    endif;
  endfor;
  $nh = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F"];
  $nb = ["0000", "0001", "0010", "0011", "0100", "0101", "0110", "0111", "1000", "1001", "1010", "1011", "1100", "1101", "1110", "1111"];
  $hex = "";
  while(strlen($b) < 4):
    $b = "0" . $b;
  endwhile;
  echo "<b>$b</b><br>";
  while(strlen($b) > 4):
    // ultimos 4
    $hex = $nh[array_search(substr($b, - 4),$nb)] . $hex;
    $b = substr($b, 0, strlen($b) - 4);  
  endwhile;
  while(strlen($b) < 4):
    $b = "0" . $b;    
  endwhile;
  $hex = $nh[array_search($b,$nb)] . $hex;
  return $hex;
}

function toOctal($b){
  // BINARY TO OCT
  for($i=0;$i<strlen($b);$i++):
    if($b[$i]!='0' && $b[$i]!='1'):
      return -1;
    endif;
  endfor;
  $no = [0, 1, 2, 3, 4, 5, 6, 7];
  $nb = ["000", "001", "010", "011", "100", "101", "110", "111"];
  $oct = "";
  while(strlen($b) < 3):
    $b = "0" . $b;
  endwhile;
  while(strlen($b) > 3):
    // ultimos 3
    $oct = $no[array_search(substr($b, - 3),$nb)] . $oct;
    $b = substr($b, 0, strlen($b) - 3);    
  endwhile;
  while(strlen($b) < 3):
    $b = "0" . $b;
  endwhile;
  $oct = $no[array_search($b,$nb)] . $oct;
  return $oct;
}