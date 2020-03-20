<?php
$alum=array(
 array("Nombre: Ramon","Edad: 29","Color favorito:  Verde"),
 array("Nombre: Ulibarri","Edad: 35","Color favorito: Rojo"),
 array("Nombre: Rishi","Edad: 19","Color favorito: Gris"),
 array("Nombre: Mario","Edad: 25","Color favorito: Amarrillo"),
 array("Nombre: Litzy","Edad: 12","Color favorito: Morado"),
);
//lista desordenada
for($row=0; $row<5;$row++){

	echo "<p><b>Numero de renglon: $row</b></p>";
	echo "<ul>";
	for($col=0; $col<3;$col++)
	{
		echo "<li>".$alum[$row][$col]."</li>";

	}	
	echo "</ul>";  
}	
?>