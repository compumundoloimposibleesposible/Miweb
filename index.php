<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contacto</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<form method="post">
		<h2>CONTÁCTO</h2>
		<input type="text" name="nombre" placeholder="Nombre" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="telefono" placeholder="Teléfono" required>
		<input type="text" name="asunto" placeholder="Asunto" required>
		<textarea name="mensage" placeholder="Mensaje" required></textarea>
		<input type="submit" name="enviar" value="ENVIAR" id="boton">
	</form>
<?php
	include("email.php");
?>
</body>
</html>