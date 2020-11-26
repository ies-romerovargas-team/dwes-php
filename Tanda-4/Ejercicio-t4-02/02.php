<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T4-02</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T4-02</h1>
  <p>Escribe un programa que pida 10 números por teclado y que luego muestre los números
    introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo
    respectivamente.</p>>
  <?php
        if (!isset($_GET['n'])) {
          $contadorNumeros = 0;
          $numeroTexto = "";
          $n = "";
        } else {
          $n = $_GET['n'];
          $contadorNumeros = $_GET['contadorNumeros'];
          $numeroTexto = $_GET['numeroTexto'];
        }

      ////////////////////////////////////////////////////////////////
      //  Programa principal una vez recogidos los datos del array.
      //  El array con los números es $numero
      ////////////////////////////////////////////////////////////////

      if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
        $numero = explode(" ", $numeroTexto);
        $maximo = -PHP_INT_MAX;
        $minimo = PHP_INT_MAX;


        foreach ($numero as $n) {
          if ($n < $minimo) {
            $minimo = $n;
          }
          if ($n > $maximo) {
            $maximo = $n;
          }
        }

        foreach ($numero as $n) {
          echo "$n";
          if ($n == $minimo) {
            echo " mínimo";
          }
          if ($n == $maximo) {
            echo " máximo";
          }
          echo "<br>";
        }
        ?>
  <br>
  <a href="02.php">>> Volver</a>
  <?php
      }
      ////////////////////////////////////////////////////////////////
      // Pide número y añade el actual a la cadena
      ////////////////////////////////////////////////////////////////
      if ($contadorNumeros < 10)  {
        ?>
  <form action="02.php" method="get">
    Introduzca un número:
    <input type="number" name="n" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
    <input type="submit" value="OK">
  </form>
  <?php
      }
      ?>
</body>

</html>