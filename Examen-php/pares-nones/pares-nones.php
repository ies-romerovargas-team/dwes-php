<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="examen.css">
  <style>
  table {
    width: 500px;
    margin: auto;
  }

  .butt {
    margin: 15px auto;

  }
  </style>
</head>

<body>
  <?php  
    $j1 = rand(0,5);
    $j2 = rand(0,5);
    if(($j1+$j2)%2==0):
      $r1="gana.svg";
      $alt1 = "Gana";      
      $r2="pierde.svg";
      $alt2 = "Pierde";      
    else:
      $r1="pierde.svg";
      $alt1 = "Pierde";
      $r2="gana.svg";
      $alt2 = "Gana";
    endif;
  ?>
  <p>Actualice la página o pulse el botón para mostrar otra partida</p>
  <table>
    <tr>
      <td></td>
      <td style="font-weight:bold">Jugador 1<br>(pares)</td>
      <td style="font-weight:bold">Jugador 2<br>(nones)</td>
      <td></td>
    </tr>
    <tr>
      <td><img src="img/<?=$r1?>" alt="<?=$alt1?>" height="100"></td>
      <td><img src="img/<?=$j1?>.svg" alt="<?=$j1?>" height="200"></td>
      <td><img src="img/<?=$j2?>.svg" alt="<?=$j2?>" height="200"></td>
      <td><img src="img/<?=$r2?>" alt="<?=$alt2?>" height="100"></td>
    </tr>
    <tr>
      <td colspan="4" style="text-align: center">
        <button onclick="location.href='<?=$_SERVER['PHP_SELF']?>'" class="butt">¡¡¡ Juega otra vez !!!</button>
      </td>
    </tr>
  </table>

</body>

</html>