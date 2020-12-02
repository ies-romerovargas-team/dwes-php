<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disfruta</title>
  <style>
  h1 {
    margin: auto;
    text-align: center;
  }

  .container {
    background: #e6ffff;
    padding: 10px;
  }

  .res {
    display: block;
    width: 80%;
    margin: auto;
    font-size: 4em;
  }

  .butt {
    display: block;
    margin: auto;
  }
  </style>
</head>

<body>
  <?php 
  $frutas = ["&#127815;", "&#127816;", "&#127817;", "&#127818;", "&#127819;", "&#127820;", "&#127821;", "&#127822;", "&#127823;", "&#127824;", "&#127825;", "&#127826;", "&#127827;"];
  $nfrutas = rand(7,20);
  $i = 0;
  $f[] = array();
  while($i < $nfrutas):
    $r = $frutas[rand(0,12)];    
    if(in_array($r, $f)):
      $n[$r]++;
    else:
      $n[$r] = 1;
    endif;
    $f[$i] = $r;
    $i++;
  endwhile;
  ?>
  <div class="container">
    <h1>DisFruta con PHP</h1>
    <h2><?=$nfrutas." frutas"?></h2>
    <div class="res">
      <?php foreach($f as $fr):?>
      <?=$fr?>
      <?php endforeach;?>
    </div>
    <h2>Resultados</h2>
    <?php foreach($n as $key => $value):?>
    <p>La fruta <span style="font-size: 2rem"><?=$key?></span> está <strong><?=$value?></strong>
      <?=$value>1?"veces":"vez"?> en la lista.</p>
    <?php endforeach;?>
    <button onclick="location.href='<?=$_SERVER['PHP_SELF']?>'" class="butt">¡¡¡ DisFruta otra vez !!!</button>
  </div>
</body>

</html>