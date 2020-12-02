<?php include "../Ejercicio-t5-01/funciones1-14.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-18</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-18</h1>
  <p>Escribe un programa que pase de decimal a binario.</p>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>Escribe número en decimal</label><br>
    <input type="number" name="decimal"><br>
    <input type="submit" value="Enviar">
  </form>
  <?php
  $continuar = true;
  if(isset($_POST['decimal'])):
    $dec =  $_POST['decimal'];
    if(is_numeric($dec)):      
      $bin = toBinary($dec);
      if($bin!=-1):
        echo $_POST['decimal'], " => ", $bin;        
      else:
        echo "Número no válido";
      endif;
    endif;
  endif;
  ?>
</body>

</html>