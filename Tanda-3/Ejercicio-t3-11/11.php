<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-11</title>
    <style>
    table, tr, td, th{
      border: 1px solid black;
      border-collapse: collapse
    }
    </style>
  </head>

  <body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-11</h1>
    <p>Escribe un programa que muestre en tres columnas, el cuadrado y el cubo
      de los 5 primeros números enteros a partir de uno que se introduce por teclado.</p>
    <p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="number" name="n">
      <input type="submit" name="Enviar">
    </form>
    <?php if (isset($_POST['n']) && is_numeric($_POST['n'])):?>
    <table>
    <tr>
      <th><em>i<em></th>
      <th><em>i<sup>2<sup><em></t>
      <th><em>i<sup>3<sup><em></th>
    </tr>
    <?php $n = $_POST['n']; 
    for($i = $n; $i<($n+5); $i++):?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $i*$i?></td>
        <td><?php echo $i*$i*$i?></td>
      </tr>
    <?php endfor;?>
    </table>
    <?php endif;?>
    </p>
  </body>

</html>