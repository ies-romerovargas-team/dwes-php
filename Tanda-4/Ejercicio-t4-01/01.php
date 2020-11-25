<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-01</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-01</h1>
  <p>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
    Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
    almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
    almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
    los tres arrays dispuesto en tres columnas.</p>
  <?php 
    for ($i=0; $i < 20; $i++) { 
        $n = rand(0, 100);
        $numeros[] = $n;
        $cuadrado[] = $n * $n;
        $cubo[] = $n * $n * $n;
    }?>
  <table>
    <tr>
      <th></th>
      <th>Numero</th>
      <th>Cuadrado</th>
      <th>Cubo</th>
    </tr>
    <?php for($i = 0; $i<20; $i++):?>
    <tr>
      <td><?php echo $i+1?></td>
      <td><?php echo $numeros[$i]?></td>
      <td><?php echo $cuadrado[$i]?></td>
      <td><?php echo $cubo[$i]?></td>
    </tr>
    <?php endfor;?>
  </table>
</body>

</html>