<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-12</title>
  </head>

  <body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-12</h1>
    <p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci.
      El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula
      sumando los dos anteriores, por lo que tendríamos que los términos son
      0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144...
      El número n se debe introducir por teclado.</p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="number" name="n">
      <input type="submit" name="Enviar">
    </form>
    <?php if (isset($_POST['n']) && is_numeric($_POST['n'])):?>
    <p>0, 1
      <?php 
      $r = 0;
      $s = 1;
      for($i = 2; $i <= $_POST['n']; $i++):
        $t = $r + $s;
        echo ", ", $t;
        $r = $s;
        $s = $t;
      endfor;
    endif;?>
  </body>

</html>