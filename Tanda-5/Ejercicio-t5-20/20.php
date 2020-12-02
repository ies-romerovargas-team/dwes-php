<?php include "funciones20-28.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-20</title>
  <style>
  .funciona {
    width: 200px;
    border: 1px solid red;
    margin: 10px;
    float: left;
  }
  </style>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-20</h1>
  <div class="funciona">
    <h2>Genera un Array</h2>
    <?php $a = generaArrayInt(10, -100,100);?>
    <pre>
    <?php
    print_r($a);
    ?>
    </pre>
  </div>

  <div class="funciona">
    <h2>Devuelve el Minimo</h2>
    <?=minimoArrayInt($a)?>
  </div>

  <div class="funciona">
    <h2>Devuelve el Máximo</h2>
    <?=maximoArrayInt($a)?>
  </div>

  <div class="funciona">
    <h2>Media</h2>
    <?=mediaArrayInt($a)?>
  </div>

  <div class="funciona">
    <h2>¿Está?</h2>
    <?php
    $active = false;
    $buscar = rand(-100,100);
    echo "<b>$buscar</b>: ";
    if(estaEnArray($a, $buscar)):
      echo "SI";
      $active=true;
    else:
      echo "NO";
    endif;
    ?>
  </div>

  <div class="funciona">
    <h2>Posición</h2>
    <?php
    if($active):
      $pos = posicionEnArray($a, $buscar);
      if($pos!=-1) echo $pos;
    endif;
    ?>
  </div>

  <div class="funciona">
    <h2>Voltea array</h2>
    <?php volteaArrayInt($a);?>
    <pre>
    <?php
    print_r($a);
    ?>
    </pre>
  </div>

  <div class="funciona">
    <h2>Rota a la derecha</h2>
    <?php $r = rand(2,9);
    echo "$r veces:";
    ?>
    <pre>
    <?php
    rotaDerechaArrayInt($a, $r);
    print_r($a);
    ?>
    </pre>
  </div>

  <div class="funciona">
    <h2>Rota a la izquierda</h2>
    <?php $r = rand(2, 9);
    echo "$r veces:";
    ?>
    <pre>
    <?php
    rotaIzquierdaArrayInt($a, $r);
    print_r($a);
    ?>
    </pre>
  </div>

</body>

</html>