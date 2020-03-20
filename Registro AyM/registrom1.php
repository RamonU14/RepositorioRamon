<?php  
include("ConexionBD.php");  
if (isset($_POST['ra1'])) {
	$array=$_POST['ra1'];
	$Nombre=$array['Nombre'];
	$Materia=$array['Materia'];
	$Correo=$array['Correo'];
	$Turno=$array['Turno'];
	$Fecha=$array['Fecha'];
}if (isset($_POST['Registrar'])) {
	if (strlen($Nombre)>=1 && strlen($Materia)>=1 && strlen($Correo)>=1 && strlen($Turno)>=1 && strlen($Fecha)>=1 ) {
	$consulta= "INSERT INTO registrom(Nombre,Materia,Correo,Turno,Fecha) VALUES ('$Nombre','$Materia','$Correo','$Turno','$Fecha')";
	$resul= mysqli_query($conexionbd,$consulta);
	if ($resul) {
	?>
	<h3>Datos registrados</h3>
	<a href="Maestros.php">Volver a ingresar los datos</a>
	<?php 
	}else{
		?>
		<h3>Hubo un error, Volver a intentar.</h3>
		<?php
	}
}

}
?>