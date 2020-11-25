<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-21</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-21</h1>
  <p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo 
  y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares.
  El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no
  se incluye en el cómputo.</p>
  <hr>
  <?php if(isset($_POST['Enviar'])):
    $numero = $_POST['numero'];
    if($numero<0):
      echo "Numeros introducidos: ", $_POST['n_orden'], "<br/>";
      echo "Media de los impares: ", $_POST['SumaImpares']/($_POST['n_impares']), "<br/>";
      echo "Mayor Par: ", $_POST['MayorPar'], "<br/>";
    else:
      // Reajustamos las variables para un nuevo número
      $NumeroOrden = $_POST['n_orden'];
      $NumeroImpares = $_POST['n_impares'];
      $MayorPares = $_POST['MayorPar'];
      $SumaImpares = $_POST['SumaImpares'];      
      if($_POST['numero']%2!=0):
        //Numero Impar
        $SumaImpares = $_POST['SumaImpares'] + $numero;
        $NumeroImpares++;
      else:
        //Numero Par
        if($_POST['numero']>$MayorPares):
          $MayorPares = $numero;
        endif;
      endif;
      $NumeroOrden++;
    endif;    
  else:
    $NumeroOrden = 0;
    $SumaImpares = 0;
    $MayorPares = 0;
    $NumeroImpares = 0;
  endif;?>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="numero">
    <input type="hidden" name="n_orden" value="<?php echo $NumeroOrden?>">
    <input type="hidden" name="n_impares" value="<?php echo $NumeroImpares?>">
    <input type="hidden" name="SumaImpares" value="<?php echo $SumaImpares?>">
    <input type="hidden" name="MayorPar" value ="<?php echo $MayorPares?>">
    <input type="submit" name="Enviar" value="Enviar">
  </form>
</body>
</html>