<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-04</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-04</h1>
  <p>Escribe un programa que genere 100 números aleatorios del 20 al 50 y que los muestre por
    pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a
    continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista
    generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un
    color diferente.</p>
  <?php
  if(!isset($_POST['n1'])):
    $lista = "";
    for($i = 0; $i < 100; $i++):
      $aux = rand(20, 50);
      $lista = $lista!="" ? $lista . " " . $aux : $aux;
    endfor;    
    echo $lista, "<br/>";
  else:
    echo $_POST['lista'], "<br/>";    
    $array = explode(" ", $_POST['lista']);
    foreach ($array as $value):
      if($value==$_POST['n1']):
        echo "<span style='color:green'>", $_POST['n2'], "</span> ";
      else:
        echo $value, " ";
      endif;
    endforeach;
  endif;
  ?>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    Introduzca un numero a buscar:<br />
    <input type="number" name="n1" autofocus><br />
    Introduzca un número a sustituir:<br />
    <input type="number" name="n2"><br />
    <input type="hidden" name="lista" value="<?= $lista?>">
    <input type="submit" value="OK">
  </form>

</body>

</html>