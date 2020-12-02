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
    for($i=0; $i<strlen($bin);$i++):
      if($bin[$i]!='0' && $bin[$i]!='1'):
        echo "Número no válido";
        $continuar = false;
      break;              
      endif;
    endfor;
    if($continuar):
      $dec = 0;
      $j = 0;
      for($i=strlen($bin)-1; $i>=0; $i--):
        $digito = $bin[$i];
        if($digito==1):
          $exp = pow(2, $j);
          $dec += $exp;
        endif;
        $j++;
      endfor;
      echo $bin, "=> ", $dec;
    endif;
  endif;
  ?>
</body>

</html>