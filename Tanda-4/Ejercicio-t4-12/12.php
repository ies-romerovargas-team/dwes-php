<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-12</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-12</h1>
  <p>Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del
   ejercicio anterior. El programa pedirá que el usuario teclee la traducción al inglés de 
   cada una de las palabras y comprobará si son correctas. Al final, el programa deberá mostrar 
   cuántas respuestas son válidas y cuántas erróneas.</p>
<?php
  
  $diccionario = [
    "way" => "camino",
    "which" => "cual",
    "each" => "cada",
    "many" => "muchos",
    "people" => "gente",
    "know" => "saber",
    "work" => "trabajo",
    "where" => "donde",
    "only" => "solamente",
    "every" => "cada",
    "through" => "mediante",
    "same" => "mismo",
    "want" => "querer",
    "also" => "además",
    "hand" => "mano",
    "even" => "incluso",
    "such" => "tal",
    "why" => "por qué",
    "kind" => "tipo",
    "near" => "cerca",
    "answer" => "pregunta",
    "grow" => "crecer",
    "food" => "comida"
  ];
  $dicc = $diccionario;
  if(!isset($_POST['Enviar'])):
    for($i = 0; $i<5; $i++):    
      $five = array_rand($dicc);
      $fivewords[$i] = $dicc[$five] ;
      unset($dicc[$five]);
    endfor;?>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <?php foreach($fivewords as $key => $spanish):?>
          <label><?=$spanish?></label>
          <input type="text" name="english[]" required><br />
          <input type="hidden" name="spanish[]" value="<?=$spanish?>"><br /> 
        <?php endforeach;?>
        <input type="submit" name="Enviar" value="Comprobar">
      </form>
  <?php else:
    $points = 0;
    foreach($_POST["english"] as $clave => $english):
      echo "<br/>", $_POST['spanish'][$clave], ": ", $english;
      foreach($diccionario as $key => $spanish):        
        if($english == $key):
          echo ": Correcto";
          $points++;           
        endif;
      endforeach;      
    endforeach;
    echo "<br />  $points aciertos";?>
    <br />
    <button onclick="location.href='<?=$_SERVER['PHP_SELF']?>'">Nuevo Intento</button>
<?php endif;?>

</body>
</html>