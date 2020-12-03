<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muestra Cartas</title>
  <link rel="stylesheet" href="examen.css">
  <style>
  input {
    margin-top: 15px;
  }
  </style>
</head>

<body>
  <form action="muestra-cartas-2.php" method="POST">
    <label>Elija un número de cartas y un palo</label><br />
    <label style="font-weight: bold;">Numero de cartas</label>
    <input type="number" max="12" min="3" name="numero">
    <select name="palo">
      <option value="c">Corazones</option>
      <option value="d">Diamantes</option>
      <option value="p">Picas</option>
      <option value="t">Tréboles</option>
    </select><br>
    <input type="submit" value="Contar">
    <input type="reset" value="Borrar">
  </form>
</body>

</html>