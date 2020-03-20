<!DOCTYPE html>
<html>
<head>
	<title>Registro Alumnos</title>
</head>
<meta charset="utf-8">
<body bgcolor="Grey">
	<form method="post">
		<center><h1>Registro de alumnos.</h1></center>
<center><h2>Ingrese los datos</h2></center>

<p>Nombre: <input type="text" name="ra[Nombre]"required size="40"></p>
<p>Fecha de nacimiento: <input type="text" name="ra[Fecha]"required size="10"></p>
<p>Carrera: <input type="text" name="ra[Carrera]"required size="20"></p>
<p>Matricula: <input type="number" name="ra[Matricula]"required size="10"></p>
<p>Correo: <input type="email" name="ra[Correo]"required size="30"></p> 
<input type="submit" name="Guardar"> 

<input type="reset" value="Borrar">
</form>
<?php
include("registroa1.php");
  ?>
</body>
</html>