<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-29</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-29</h1>
  <p>Escribe un programa que muestre por pantalla todos los números enteros 
  positivos menores a uno leído por teclado que no sean divisibles entre otro
  también leído de igual forma</p>
  <p>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="number" name="n1"><br/>
    <input type="number" name="n2">
    <input type="submit" name="Enviar">
  </form>

  <?php if(isset($_POST['n1'])): ?>
  <?php for($i = $_POST['n1']; $i>=0; $i--):?>
  <?php if($i%$_POST['n2']!=0):?>
  <?= $i, " "?>
  <?php endif;?>
  <?php endfor;?>
  <?php endif;?>
  </p>
</body>

</html>