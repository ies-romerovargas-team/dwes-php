<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-27</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-27</h1>
  <p>Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1
   y un número leído por teclado</p>  
  <hr>  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="numero"/>    
    <input type="submit" name="Enviar" value="Enviar"/>
  </form>
  <hr>
  <?php  
  if(isset($_POST['Enviar'])):?>
    <table>
    <caption>Múltiplos de 3 desde 1 a <?= $_POST['numero']?></caption>
      <tr>
        <th>Múltiplo</th>
        <th>Orden</th>
        <th>Suma</th>      
    <?php 
    $cont = 0;
    $sum = 0;
    for($i = 1; ($i*3) <= $_POST['numero']; $i++):?>      
      <tr>
        <td><?= $i*3?></td>
        <td><?= ++$cont?></td>
        <td><?= $sum+($i*3)?></td>
      </tr>
      <?php 
      $sum += ($i*3);
      
    endfor;
  endif;
  ?>
  </tr>
    </table>
</body>
</html>