<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muestra Cartas</title>
  <link rel="stylesheet" href="examen.css">
</head>

<body>
  <h1>MUESTRA CARTAS (RESULTADO)</h1>
  <?php if(isset($_POST['numero'])):
  $n = $_POST['numero'];
  if($n<3 || $n>12):?>
  <p class="aviso">El numero de cartas solicitado no está en el rango permitido</p>
  <?php endif;?>

  <?php if(!isset($_POST['palo'])):?>
  <p class="aviso">No ha elegido el palo</p>
  <?php else:
    switch($_POST['palo']):
      case "c":
        $palo = "corazones";
      break;
      case "d":
        $palo = "diamantes";
      break;
      case "p":
        $palo = "picas";
      break;
      case "t":
        $palo = "tréboles";
    endswitch;
  endif;?>
  <p class="grande" style="font-weight: bold;"><?=$n?> cartas de <?=$palo?></p>

  <?php 
  $cartas = array();
  $repetidas = false;
  for($i=0; $i<$n; $i++):
    $r = rand(1,10);
    $carta = $_POST['palo'].$r;    
    $cartas[$i] = $carta;
    if($i>0 && $carta == $cartas[$i-1]):
       $repetidas = true;
    endif;?>
  <img src="img/<?=$carta?>.svg" alt="<?=$r?>" width="100">
  <?php endfor;
  if($repetidas):?>
  <p>Hay cartas iguales seguidas.</p>
  <?php else:?>
  <p>No hay cartas iguales seguidas.</p>
  <?php endif;?>
  <?php endif;?>
  <a href="muestra-cartas-1.php">Volver al formulario</a>
</body>

</html>