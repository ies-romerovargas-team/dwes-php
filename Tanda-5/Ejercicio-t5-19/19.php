<?php include "../Ejercicio-t5-01/funciones1-14.php"?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T5-19</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T5-19</h1>
  <p>Une y amplía los dos programas anteriores de tal forma que se permita convertir
    un número entre cualquiera de las siguientes bases: decimal, binario, hexadecimal y octal.</p>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <table>
      <tr>
        <td>
          <label>Escribe número</label><br>
          <input type="text" name="numero"><br>
        </td>
        <td>
          <label>Escribe número</label><br>
          <select name="base">
            <option value="dec">Decimal</option>
            <option value="bin">Binario</option>
            <option value="hex">Hexadecimal</option>
            <option value="oct">Octal</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Enviar" name="Enviar">
        </td>
      </tr>
    </table>
  </form>
  <br />
  <?php
  if(isset($_POST['Enviar'])):
    $n = $_POST['numero'];
    if($_POST['base']=="dec"):
      $dec = $n;
      $bin = toBinary($n);
      //echo "Bin: $bin";
      if($bin!=-1):
        $hex = toHexadecimal($bin);
        $oct = toOctal($bin);
      endif;
    endif;
    //
    if($_POST['base']=="bin"):
      $bin = $n;
      $dec = toDecimal($n);
      if($dec!=-1):
        $hex = toHexadecimal($n);
        $oct = toOctal($n);
      endif;
    endif;
    //
    if($_POST['base']=="hex"):
      $hex = $n;
      $bin = HexToBinary($n);
      if($bin!=-1):
        $dec = toDecimal($bin);
        $oct = toOctal($bin);
      endif;
    endif;
    //
    if($_POST['base']=="oct"):
      $oct = $n;
      $bin = OctToBinary($n);
      if($bin!=-1):
        $hex = toHexadecimal($n);
        $dec = toDecimal($n);
      endif;
    endif;
    ?>
  <table>
    <tr>
      <th>Decimal</th>
      <th>Binario</th>
      <th>Hexadecimal</th>
      <th>Octal</th>
    </tr>
    <tr>
      <td><?=$dec?></td>
      <td><?=$bin?></td>
      <td><?=$hex?></td>
      <td><?=$oct?></td>
    </tr>
  </table>
  <?php endif; ?>
</body>

</html>