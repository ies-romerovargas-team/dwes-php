<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-08</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-08</h1>
  <p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. 
  A continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando
  para ello una tabla. Seguidamente el programa pasará los primos a las primeras posiciones, 
  desplazando el resto de números (los que no son primos) de tal forma que no se pierda 
  ninguno. Al final se debe mostrar el array resultante</p>
<?php if(isset($_POST['numero'])):  
  $contador = $_POST['contador'] + 1;
  $vector = $_POST['vector'];
  $vector[] = $_POST['numero'];
else:
  $contador = 0;
  $vector = [];
endif;
if($contador==10):?>
<table border="1" cellspacing="0">
<tr><th colspan="10">Array inicial</th></tr>
  <tr>
  <?php for($i = 0; $i < 10; $i++):?>
    <th><?=$i?></th>
  <?php endfor;?>
  </tr>
  <tr>
  <?php for($i = 0; $i < 10; $i++):?>
    <th><?=$vector[$i]?></th>
  <?php endfor;?>
  </tr>
</table>
<?php
  $pointer = 0;
  foreach($vector as $key => $value):
    $n = $value - 1;
    $primo = true;
    while($n >= 2):            
      if($value%$n==0):
        $primo = false;
      break;
      endif;
      $n--;
    endwhile;
    if($primo):      
      if($pointer!=$key):
        $aux = $vector[$pointer];
        $vector[$pointer] = $value;
        $vector[$key] = $aux;
      endif; 
      $pointer++;
    endif;    
  endforeach;
?>
<br>
<table border="1" cellspacing="0">
  <tr><th colspan="10">Array final</th></tr>
  <tr>
  <?php for($i = 0; $i < 10; $i++):?>
    <th><?=$i?></th>
  <?php endfor;?>
  </tr>
  <tr>
  <?php for($i = 0; $i < 10; $i++):?>
    <th><?=$vector[$i]?></th>
  <?php endfor;?>
  </tr>
</table>
  <?php else:?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <input name="numero" type="number" autofocus required>
    <input type="hidden" name="contador" value="<?=$contador?>">
    <?php foreach($vector as $value):?>
      <input type="hidden" name="vector[]" value="<?=$value?>">
    <?php endforeach;?>
    <input type="submit" name="Enviar" value="Ok">
  </form>
  <?php endif;?>
</body>
</html>