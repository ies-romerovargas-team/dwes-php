<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-25</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-25</h1>
  <p>Realiza un programa que pida un número por teclado y que luego muestre ese número al revés</p>   
  <hr>  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="numero"/>
    <input type="submit" name="Enviar" value="Enviar"/>
  </form>
  <hr>
  <?php  
  if(isset($_POST['Enviar'])):
    $numero = abs($_POST['numero']);
    echo $numero, "<br/>";    
    while($numero>=10){
      $numero2 = floor($numero/10);      
      echo $numero - $numero2*10;
      $numero = $numero2;
    }
    echo $numero;
  endif;
  ?>
</body>
</html>