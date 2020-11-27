<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-09</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-09</h1>
  <p>Realiza un programa que pida 10 números por teclado y que los almacene en un array.
    A continuación se mostrará el contenido de ese array junto al índice (0 – 9).
    Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”.
    Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9.
    El programa deberá colocar el número de la posición inicial en la posición final, rotando
    el resto de números para que no se pierda ninguno. Al final se debe mostrar el array resultante</p>
  <?php if(isset($_POST['OK'])=="Enviar-1"):?>
  <?php elseif(isset($_POST['OK'])=="Enviar-2"):?>

  <?php endif;?>
  <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    Introduzca Numero (<?=$contador+1?>)<br />
    <input type="number" name="numero" autofocus>
    <input type="hidden" name="contador" value="<?=$contador?>">
    <input type="hidden" name="ristraNumeros" value="<?=$ristraNumeros?>">
    <input type="submit" name="OK" value="Enviar-1">
  </form>
</body>

</html>