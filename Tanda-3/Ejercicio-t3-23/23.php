<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-23</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-23</h1>
  <p>Escribe un programa que permita ir introduciendo una serie indeterminada de números
   hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe
   mostrar el total acumulado, el contador de los números introducidos y la media.</p>
  <hr>
  <?php  
  if(isset($_POST['Enviar'])):
    $numero = $_POST['numero'];
    $contador = $_POST['contador'];
    $suma = $_POST['suma'];    

    $suma = $suma + $numero;    
    if($suma>10000):
      echo "Total acumulado: ", $suma, "<br/>";
      echo "Total números introducidos: ", $contador, "<br/>";
      $media = $suma / $contador;
      echo "Media: ", $media;
    else:
      $contador++;
    endif;
  else:
    $contador = 1;
    $suma = 0;    
  endif;
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="numero"/>
    <input type="hidden" name="contador" value="<?php echo $contador?>"/>
    <input type="hidden" name="suma" value="<?php echo $suma?>"/>    
    <input type="submit" name="Enviar" value="Enviar"/>
  </form>
</body>
</html>