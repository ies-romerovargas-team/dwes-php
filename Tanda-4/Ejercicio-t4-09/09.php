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
    <?php if(isset($_POST['Enviar'])):  
      $contador = $_POST['contador'] + 1;
      $vector = $_POST['vector'];
      $vector[] = $_POST['numero'];
    else:
      $contador = 0;
      $vector = [];
    endif;
    if(isset($_POST["Enviar2"])):

    endif;
    if($contador==10):?>
    <table border="1" cellspacing="0">
      <tr>
        <th colspan="10">Array inicial</th>
      </tr>
      <tr>
        <?php for($i = 0; $i < 10; $i++):?>
        <th><?=$i?></th>
        <?php endfor;?>
      </tr>
      <tr>
        <?php for($i = 0; $i < 10; $i++):?>
        <th><?=$vector[$i]?></th>
        <?php endfor;?>
      </tr>
    </table>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">      
      <input type="number" name="inicial" value="" autofocus required>
      <input type="number" name="final" value="" required>
      <input type="submit" name="Enviar2" value="Ok">
    </form>
      <?php if(isset($_POST["Enviar2"])):?>
      <?php // comprobar inicial<final ?>
      <br>
      <table border="1" cellspacing="0">
        <tr>
          <th colspan="10">Array final</th>
        </tr>
        <tr>
          <?php for($i = 0; $i < 10; $i++):?>
          <th><?=$i?></th>
          <?php endfor;?>
        </tr>
        <tr>
          <?php for($i = 0; $i < 10; $i++):?>
          <th><?=$vector[$i]?></th>
          <?php endfor;?>
        </tr>
      </table>
      <?php endif;?>
    <?php else:?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
      <input name="numero" type="number" autofocus required>
      <input type="hidden" name="contador" value="<?=$contador?>">
      <?php foreach($vector as $value):?>
      <input type="hidden" name="vector[]" value="<?=$value?>">
      <?php endforeach;?>
      <input type="submit" name="Enviar" value="Ok">
    </form>
    <?php endif;?>
  </body>

</html>