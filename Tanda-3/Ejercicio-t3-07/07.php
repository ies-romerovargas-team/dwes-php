<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio T3-07</title>
</head>

<body>
    <p><a href="../../index.php">Inicio</a></p>
    <h1>Ejercicio T3-07</h1>
    <p>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
        El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
        “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
        satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</p>
    <p></p>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Introduzca combinación de 4 cifras</label>
        <input type="password" name="key" maxlenght="4" size="4">
        <input type="submit" name="Enviar" value="Enviar">
  </form>
<?php
function comprueba($a, $b) {
	if ($a == $b) {
		echo "La caja fuerte se ha abierto satisfactoriamente";
		session_unset();
	} else {
		echo "Lo siento, esa no es la combinación. ", "Intento:", $_SESSION['intento'];
		$_SESSION['intento']++;
	}
}

if (isset($_POST['key'])) {
	define(clave, "1234");
	if (isset($_SESSION['intento']) && $_SESSION['intento'] < 4) {
		comprueba($_POST['key'], clave);
	} else {
		if (isset($_SESSION['intento'])) {
			echo "Ya no se aceptan más intentos";
		} else {
			$_SESSION['intento'] = 1;
			comprueba("1", "2");
		}
	}
} else {
	session_unset();  
}
?>
</body>

</html>