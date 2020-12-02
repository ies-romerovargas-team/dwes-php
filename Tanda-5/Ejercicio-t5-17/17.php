<?php include "../Ejercicio-t5-01/funciones1-14.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-17</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-17</h1>
  <p>Escribe un programa que pase de binario a decimal.</p>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>Escribe número en binario</label><br>
    <input type="text" name="binario"><br>
    <input type="submit" value="Enviar">
  </form>
  <?php
  $continuar = true;
  if(isset($_POST['binario'])):
    $bin = $_POST['binario'];
    $dec = toDecimal($bin);
    if($dec!=-1):
      echo $bin, " => ", $dec;
    else:
      echo "Número no válido";
    endif;
  endif;
  ?>
</body>

</html>