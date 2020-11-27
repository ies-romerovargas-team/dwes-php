<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-05</title>
</head>
<style> 
  .temperatura{
    height: 25px;
    background: linear-gradient(to right, blue, white, orange, red);
  }
</style>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-05</h1>
  <p>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
   año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras 
   del diagrama se pueden dibujar a base de la concatenación de una imagen.</p>
  <?php
  $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  if(isset($_POST['OK'])):?>
    <table>
    <?php for($i=0; $i<12; $i++):?>
      <tr>
        <td><?=$meses[$i]?></td>
        <td><div class="temperatura" style="width:<?=$_POST['temp'][$i]*5?>px"></div></td>
        <td><?=$_POST['temp'][$i]?> ºC</td>
      </tr>
    <?php endfor;?>
    </table>
  <?php endif;?>  
  <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
    Introduzca Temperatura Media de cada mes:<br/>
    <table>
    <?php for($i=0;$i<12;$i++):?>
    <tr>
      <td><?= $meses[$i]?></td>
      <td><input type="number" name="temp[<?= $i?>]"></td>
    </tr>
    <?php endfor;?>
    </table> 
    <input type="submit" name="OK" value="OK">
  </form>

</body>

</html>