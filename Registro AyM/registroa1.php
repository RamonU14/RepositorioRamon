<?php  
include("ConexionBD.php");  
if (isset($_POST['ra'])) {
	$array=$_POST['ra'];
	$Nombre=$array['Nombre'];
	$Fechan=$array['Fecha'];
	$Matricula=$array['Matricula'];
	$Carrera=$array['Carrera'];
	$Correo=$array['Correo'];
}if (isset($_POST['Guardar'])) {
	if (strlen($Nombre)>=1 && strlen($Fechan)>=1 && strlen($Matricula)>=1 && strlen($Carrera)>=1 && strlen($Correo)>=1 ) {
	$consulta= "INSERT INTO registroa(Nombre,Fecha,Matricula,Carrera,Correo) VALUES ('$Nombre','$Fechan','$Matricula','$Carrera','$Correo')";
	$resul= mysqli_query($conexionbd,$consulta);
	if ($resul) {
	?>
	<h3>Datos registrados</h3>
	<a href="Alumnos.php">Volver a ingresar los datos</a>
	<?php 
	}else{
		?>
		<h3>Hubo un error, Volver a intentar.</h3>
		<?php
	}
}

}
?>