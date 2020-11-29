<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-14</title>
  <style>
      * {
        box-sizing: border-box;
      }

      .divTable {
        width: 300px;
        margin: auto;
        display: grid;
        grid-template-columns: 30px 30px 30px 30px 30px 30px 30px 30px 30px 30px;
      }

      .divTableCell {
        border: 1px solid #999999;
        height: 30px;
        width: 30px;
        text-align: center;
        vertical-align: middle;
      }
    </style>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-14</h1>
  <p>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría 
  saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un 
  color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal. 
  El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas 
  se indican del 1 al 8.</p>
  <?php  
  $tablero = array();
  $c = 1;
  for($i=0; $i<8; $i++):
    for($j=0; $j<8; $j++):
      $tablero[$i][$j][0] = "";
      if($c > 0):
        $tablero[$i][$j][1] = "white";
        $c = $c * -1;
      else:
        $tablero[$i][$j][1] = "rgb(199, 188, 188)";
        $c = $c * -1; 
      endif;      
    endfor;
    $c = $c * -1;   
  endfor;
  if(isset($_POST['Enviar'])):
    $fila = 9 - $_POST['fila']-1;
    $columna = ord($_POST['columna']) - 97  ;
    if($fila > 8 || $fila < 0 || $columna > 8 || $fila <0):
      echo "Error introduciendo posición";
    else:
      $tablero[$fila][$columna][0] = "A";
      $f = $fila;
      $c = $columna;
      while (($f + 1 <= 8) && ($c + 1 <= 8)):
        $tablero[++$f][++$c][1] = "cadetblue";
      endwhile;
      // .\
      $f = $fila;
      $c = $columna;
      while (($f - 1 >= 0) && ($c - 1 >= 0)):
        $tablero[--$f][--$c][1]= "cadetblue";
      endwhile;
      // /.
      $f = $fila;
      $c = $columna;
      while (($f - 1 >= 0) && ($c + 1 <= 8)):
        $tablero[--$f][++$c][1] = "cadetblue";
      endwhile;
      // ./
      $f = $fila;
      $c = $columna;
      while (($f + 1 <= 8) && ($c-1 >= 0)):
        $tablero[++$f][--$c][1] = "cadetblue";
      endwhile;
    endif;
  endif;
  ?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    Introduzca posicion alfil<br />
    Columna(a-h)<input type="text" name="columna" size="4"><br />
    Fila(1-8)<input type="number" max="8" min="1" name="fila" size="4"><br />
    <input type="submit" name="Enviar" value="Colocar">
  </form>
  <!-- &#9821; -->
  <div class="divTable">
    <div class="divTableCell">&nbsp;</div>
    <div class="divTableCell">a</div>
    <div class="divTableCell">b</div>
    <div class="divTableCell">c</div>
    <div class="divTableCell">d</div>
    <div class="divTableCell">e</div>
    <div class="divTableCell">f</div>
    <div class="divTableCell">g</div>
    <div class="divTableCell">h</div>
    <div class="divTableCell">&nbsp;</div>
  <?php for($i=0; $i<8; $i++): ?>
    
      <div class="divTableCell"><?=8-$i?></div>
    <?php for($j=0; $j<8; $j++):?>
      <div class="divTableCell" style ="background-color:<?=$tablero[$i][$j][1]?>; font-size: 2em;">
      <?php if($tablero[$i][$j][0]=="A"):?>
        &#9821;
    <?php else:?>
      &nbsp;
    <?php endif;?>
      </div>
    <?php endfor;?>
      <div class="divTableCell"><?=8-$i?></div>    
  <?php endfor;?>
    <div class="divTableCell">&nbsp;</div>
    <div class="divTableCell">a</div>
    <div class="divTableCell">b</div>
    <div class="divTableCell">c</div>
    <div class="divTableCell">d</div>
    <div class="divTableCell">e</div>
    <div class="divTableCell">f</div>
    <div class="divTableCell">g</div>
    <div class="divTableCell">h</div>
    <div class="divTableCell">&nbsp;</div>
  </div><!-- table -->
  <?php
  ?>
</body>
</html>