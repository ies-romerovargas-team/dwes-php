<?php include "funciones29-34.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-20</title>
  <style>
  .funciona {
    width: 300px;
    border: 1px solid red;
    margin: 10px;
    float: left;
  }
  </style>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-29</h1>
  <div class="funciona">
    <h2>Genera un Array</h2>
    <?php $a = generaArrayBiInt(7, 8, -50, 50);?>
    <pre><?php printArrayBi($a); ?></pre>
  </div>

  <div class="funciona">
    <h2>Devuelve la fila</h2>
    <?php $f = rand(0, 6);
    echo "Fila: ",$f,"<br/>";
    printArray(filaDeArrayBiInt($a,$f));?>
  </div>

  <div class="funciona">
    <h2>Devuelve la Columna</h2>
    <?php $c = rand(0, 7);
    echo "Columna: ",$c,"<br/>";
    printArray(columnaDeArrayBiInt($a,$c));?>
  </div>

  <div class="funciona">
    <h2>Coordenadas</h2>
    <?php $n = rand(-50, 50);
    echo "Numero a buscar: ",$n,"<br/>";    
    printArray(coordenadasEnArrayBiInt($a,$n));?>
  </div>

  <div class="funciona">
    <h2>¿Es Punto de Silla?</h2>
    <?php if(esPuntoDeSilla($a, 0)):?>
    <p style="color:red; font-size:2em">Si</p>
    <?php else:?>
    <p>No</p>
    <?php endif;?>
  </div>

</body>

</html>