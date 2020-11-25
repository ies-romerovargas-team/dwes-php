<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-26</title>
</head>
<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-26</h1>
  <p>Realiza un programa que pida primero un número y a continuación un dígito. 
  El programa nos debe dar la posición (o posiciones) contando de izquierda a 
  derecha que ocupa ese dígito en el número introducido.</p>   
  <hr>  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="number" name="numero"/>
    <select name="digito">
      <?php for($i = 0; $i<=9; $i++):?>
      <option value="<?php echo $i?>"><?php echo $i?></option>
      <?php endfor; ?>
    </select>
    <input type="submit" name="Enviar" value="Enviar"/>
  </form>
  <hr>
  <?php  
  if(isset($_POST['Enviar'])):
    $numero = abs($_POST['numero']);
    $digito = $_POST['digito'];
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
<!--
1235489846
5



  -->