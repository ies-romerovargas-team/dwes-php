<?php session_start()?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio T3-10</title>
    </head>

    <body>
        <p><a href="../../index.php">Inicio</a></p>
        <h1>Ejercicio T3-10</h1>
        <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado.
            A priori, el programa no sabe cuántos números se introducirán.
            El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.</p>
        <p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="number" name="n">
            <input type="submit" name="Enviar">
        </form>
        <?php
if (isset($_POST['n']) && is_numeric($_POST['n'])):
	if ($_POST['n'] >= 0):
		if (!isset($_SESSION)) {
			array($_SESSION["numeros"]);
		}
		$_SESSION['numeros'][] = $_POST['n'];
		?>
        <p>Números:
            <?php
		foreach ($_SESSION['numeros'] as $num):
			echo " ", number_format($num, 0);
		endforeach;
	else:
		$total_numeros = count($_SESSION['numeros']);
		$suma = array_sum($_SESSION['numeros']);
		?>
        <p>Media:
            <?php
		echo " ", number_format($suma / $total_numeros, 2);
		session_unset()
		?>
        </p>
        <?php 
	endif;
else:
	session_unset();
endif;?>
        </p>
    </body>

</html>