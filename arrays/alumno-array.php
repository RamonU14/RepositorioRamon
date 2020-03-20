<!DOCTYPE html>
<html>
<head>
	<title>Alumnos nuevo</title>
</head>
<body bgcolor="yellow">
 <form action="nose" method="POST">
    <!--Llenado del alumno-->
Alumno 1:
    <input type="text" name="No1" required>
    Calificacion 1:
    <input type="number" size="5" name="calif11">
    Calificacion 2:
    <input type="number" size="5" name="calif21">
    <br></br> 
    <input type="submit" name="Calcular">
</body>
</html>
<?php
if (isset($_POST['info'])){
	$array=$_POST['info'];
	$Nombre=$array['Nombre'];
	$calif1=$array['calif11'];
	$calif2=$array['calif21'];

?>