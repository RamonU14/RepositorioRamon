<form action="array_22.php" method="POST">
	fecha:
	<input type="text" value="<?php echo date("m-d-Y"); ?>" disable>
	<input type="text" name=info[fecha] value="<?php echo date("m-d-Y"); ?>" hidden >
    <br>
    concepto:
    <input type="text" name="info[concepto]" required>
    <br>
    cantidad:
    <input type="text" name="info[cantidad]" required>
    <br>
    saldo:
    <input type="text" name="info[saldo]" required>
    <br>
    <input type="submit" value="enviar">
</form>

<?php
//comprobar si la variable tuvo vector info es creada para enviar el formulario
if (isset($_POST['info'])){
	$array=$_POST['info'];
	$fecha=$array["fecha"];
	$concepto=$array["concepto"];
	$cantidad=$array["cantidad"];
	$saldo=$array["saldo"];
	echo "Los valores obtenidos en el formulario con array Multidimensionales es:<br>
	fecha:".$fecha."<br>concepto:".$concepto."<br>cantidad:".$cantidad."<br>saldo".$saldo."";

	//Campos: nombre, matricula, carrera, correo, fecha de nacimiento
	//con empleados y profesores
	//pasar a array el formulario guardar y mandar a la base de datos si existe array mandar mensaje de datos guardados
	//conexion a base de datos, 
	//<a href="alumnos.php"
}
?>