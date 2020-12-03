<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoltar || Adivina un número</title>
  <style>
  form {
    width: 400px;
    height: 226px;
    margin: auto;
    background-image: url("img/zoltar.jpg");
  }

  form label {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 2em;
    color: yellow;
  }

  form input[type=number] {
    position: relative;
    width: 100px;
    left: 150px;
    height: 20px;
  }

  form input[type=submit] {
    position: relative;
    top: 120px;
    left: 150px;
    width: 100px;
    background-color: white;
  }

  .mensaje {
    text-align: center;
    font-size: 2em;
  }
  </style>
</head>

<body>
  <?php 
  $mensaje="";
  $gana = false;
  if(isset($_POST['secret'])):  
    $n = isset($_POST['numero']) ? $_POST['numero'] : 0;
    $secret = base64_decode($_POST['secret']);
    // solo para comprobaciones, borrar la siguiente linea
    $borrar = $secret;
    
    if($n == 0):
      echo "No se ha escrito ningún número;";
    else:    
      if($n>$secret):
        $mensaje = "Demasiado grande";
      elseif($n<$secret):
        $mensaje = "Demasiado pequeño";
      else:
        $mensaje = "Felicidades!!";
        $gana = true;
      endif;
    endif;
    $secret = base64_encode($secret);
  else:
    $secret = base64_encode(rand(1,100));
  endif;
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label>Dime tu predicción</label><br />
    <input type="number" max="100" min="1" name="numero">
    <input type="hidden" name="secret" value="<?=$secret?>"><br>
    <input type="submit" name="Enviar" value=" Ok ">
  </form>
  <p class="mensaje"><?=$mensaje?></p>
  <?php if($gana):?>
  <button onclick="location.href='<?=$_SERVER['PHP_SELF']?>'" class="butt">¡¡¡ Juega otra vez !!!</button>
  <?php endif;?>
  <?php if(isset($borrar)) echo "El numero a buscar es el: $borrar (esta parte de código es para comprobar su funcionamiento)"?>
</body>

</html>