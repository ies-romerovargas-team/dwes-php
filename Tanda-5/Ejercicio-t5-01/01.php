<?php include "funciones1-14.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .funciona {
    columns: 6;
    text-align: center;
    border: 1px solid red;
    margin-bottom: 10px;
  }
  </style>
</head>

<body>
  <div class="funciona">
    <h2>100 Capicúas</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        if(esCapicua($r)):
          $i++;        
          echo $r,"<br>";
        endif;
      endwhile;?>
  </div>

  <div class="funciona">
    <h2>100 primeros Primos</h2>
    <?php    
      $i=2;
      while($i<100):        
        if(esPrimo($i)):          
          echo $i,"<br/>";
        endif;
        $i++;
      endwhile;?>
  </div>

  <div class="funciona">
    <h2> Primos del 3000 al 5000 y sus siguientes</h2>
    <?php    
      $i = 3000;
      while($i<5000):
        if(esPrimo($i)):          
          echo $i," => ";
          echo siguientePrimo($i), "<br>";
        endif;
        $i++;
      endwhile;?>
  </div>

  <div class="funciona">
    <h2>Cuenta Dígitos</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        echo $r, " ", digitos($r),"<br>";
        $i++;        
      endwhile;?>
  </div>

  <div class="funciona">
    <h2>Voltea Numeros</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        echo $r, " ", voltea($r),"<br>";
        $i++;        
      endwhile;?>
  </div>

  <div class="funciona">
    <h2>Digito[N]</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $pos = rand(3,6);
        echo $r, "[$pos]: ", digitoN($r, $pos),"<br>";
        $i++;        
      endwhile;?>
  </div>

  <div class="funciona">
    <h2>Posicion del Digito</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $dig = rand(0,9);
        echo $r, "=> $dig: ", PosicionDeDigito($r, $dig),"<br>";
        $i++;        
      endwhile;      
      ?>
  </div>

  <div class="funciona">
    <h2>Quita por detrás</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $dig = rand(0,5);
        echo $r, "=> $dig: ", quitaPorDetras($r, $dig),"<br>";
        $i++;        
      endwhile;      
      ?>
  </div>

  <div class="funciona">
    <h2>Quita por delante</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $dig = rand(3,5);
        echo $r, "=> $dig: ", quitaPorDelante($r, $dig),"<br>";
        $i++;        
      endwhile;      
      echo quitaPorDelante(123,6);
      ?>

  </div>

  <div class="funciona">
    <h2>Pega por detrás</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $dig = rand(0,9);
        echo $r, "=> $dig: ", pegaPorDetras($r, $dig),"<br>";
        $i++;        
      endwhile;      
      //echo quitaPorDelante(123,6);
      ?>
  </div>


  <div class="funciona">
    <h2>Pega por delante</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $dig = rand(0,9);
        echo $r, "=> $dig: ", pegaPorDelante($r, $dig),"<br>";
        $i++;        
      endwhile;       
      ?>
  </div>

  <div class="funciona">
    <h2>Trozos de Numero</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(9999,9999999);
        $ini = rand(0,7);
        $fin = rand($ini + 1,9);
        echo $r, "=> $ini-$fin ", trozoDeNumero($r, $ini, $fin),"<br>";
        $i++;        
      endwhile;       
      ?>
  </div>

  <div class="funciona">
    <h2>Junta Números</h2>
    <?php    
      $i=0;
      while($i<100):
        $r = rand(99,9999);
        $q = rand(99,9999);               
        echo $r, "+ $q => ", juntaNumeros($r, $q), "<br>";
        $i++;        
      endwhile;       
      ?>
  </div>
</body>

</html>