<!DOCTYPE html>
<html>
<head>
	<title>Registro Maestros</title>
</head>
<form method="post">
	<meta charset="utf-8">
<body bgcolor="Grey">
	<center><h1>Registro de Maestros</h1></center>
<center><h2>Ingrese los datos</h2></center>
<p>Nombre: <input type="text" name="ra1[Nombre]" size="30" required></p>
<p>Materia: <input type="text" name="ra1[Materia]" size="20" required></p>
<p>Correo: <input type="email" name="ra1[Correo]" size="30" required></p>
<p>Turno: <input type="text" name="ra1[Turno]" size="15" required></p>
<p>Fecha: <input type="text" name="ra1[Fecha]" size="15" required></p>
<input type="submit" name="Registrar">
</form>
<?php
include("registrom1.php");
  ?>

</body>
</html>
 