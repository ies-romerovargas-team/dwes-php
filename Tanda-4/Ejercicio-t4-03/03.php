<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-03</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-03</h1>
  <p>Escribe un programa que lea 15 números por teclado y que los almacene en un array.
   Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a 
   la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición 
   debe pasar a la posición 0. Finalmente, muestra el contenido del array.</p>
  <?php if(isset($_POST['n'])):
    $contadorNumeros = ++$_POST['contadorNumeros'];
    $ristraNumeros = $_POST['ristraNumeros']!="" ? $_POST['ristraNumeros'] .".". $_POST['n'] : $_POST['n'];
  else:
    $contadorNumeros = 0;
    $ristraNumeros = "";
  endif;
  //res
  if($contadorNumeros==15):
    $array = explode(".", $ristraNumeros);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    echo "<br/>";
    for($i = 0; $i<8; $i++):
      $aux = $array[$i];
      $array[$i] = $array[14-$i];
      $array[14-$i] = $aux;
    endfor;
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    $contadorNumeros = 0;
    $ristraNumeros = ""; 
  endif;
  ?>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    Introduzca un número (<?= $contadorNumeros+1 ?>):
    <input type="number" name="n" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
    <input type="hidden" name="ristraNumeros" value="<?= $ristraNumeros?>">
    <input type="submit" value="OK">
  </form>  
</body>

</html>