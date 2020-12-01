<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-11</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-11</h1>
  <p>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
    Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
    en español y dará la correspondiente traducción en inglés.</p>

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
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="spanish" autofocus required>
    <input type="submit" name="Enviar" value="TRADUCIR">
  </form>
  <?php if(isset($_POST['spanish'])):
  $resultado = "No encontrado";
  foreach($diccionario as $key => $word):
    if($_POST['spanish']==$word)
      $resultado = $_POST['spanish'] . ": <em>" . $key . "</em>";
  endforeach;
  echo $resultado;
  endif;
?>
</body>

</html>