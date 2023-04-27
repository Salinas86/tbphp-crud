<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>CRUD EN PHP</title>
</head>
<body>
	<form method="post" action="index.php">
		<h1>Registro</h1>	
		<input type="text" name="nombre" placeholder="Ingrese su Nombre">
		<input type="password" name="pass" placeholder="Ingrese su Contraseña">
		<input type="text" name="email" placeholder="Ingrese su Correo">
		<input type="submit" name="insert" value="INSERTAR DATOS">
	</form>
	<?php 
	include("registro.php");
	?>
</body>
</html>