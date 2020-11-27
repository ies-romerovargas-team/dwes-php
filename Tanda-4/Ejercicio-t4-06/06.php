<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-06</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-06</h1>
  <p>Realiza un programa que pida 8 números enteros y que luego muestre esos números
    de colores, los pares de un color y los impares de otro</p>
  <?php  
  if(isset($_POST['OK'])):
    $contador = $_POST['contador'] + 1;
    $ristraNumeros = $contador > 1 ? $_POST['ristraNumeros'] ." ".$_POST['numero'] : $_POST['numero'];
  else:
    $contador = 0;
    $ristraNumeros = "";
  endif;
  if($contador==8):
    $array = explode(" ", $ristraNumeros);
    foreach ($array as $value):
      if($value%2==0):
        echo $value, " ";
      else:
        echo "<span style='color: green'>", $value, "</span> ";
      endif;
    endforeach;
    $contador = 0;
    $ristraNumeros = "";
  endif;
  ?>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    Introduzca Numero (<?=$contador+1?>)<br />
    <input type="number" name="numero" autofocus>
    <input type="hidden" name="contador" value="<?=$contador?>">
    <input type="hidden" name="ristraNumeros" value="<?=$ristraNumeros?>">
    <input type="submit" name="OK" value="OK">
  </form>

</body>

</html>