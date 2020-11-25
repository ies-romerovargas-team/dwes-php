<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-28</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-28</h1>
  <p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p>
  <p>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="n">
    <input type="submit" name="Enviar">
  </form>

  <?php if(isset($_POST['n']) && is_numeric($_POST['n'])): ?>
  <p><?php echo factorial($_POST['n'])?>
    <?php endif; ?>

    <?php function factorial($a){
    if($a>1) {
      return $a * factorial($a-1);
    } else return 1;
  }?>
  </p>
</body>

</html>