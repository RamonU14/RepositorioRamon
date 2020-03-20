<?php
$animales = array (
"gato" => "Sunny" ,
"perro" => "Stoichnov" ,
"chimpance" => "Muggles" , 
"chinchilla" => "Herminia" ,
"Charles" ,
"oso" => "Tarzan" ,
);

$animales2 = array (
	"perro" => "Stoichnov" ,
	"gato" => "Sunny" ,
	"conejo" => "Tarzan" ,
	"Muggles" ,
);
$diferencia = array_diff($animales, $animales2);
var_dump($diferencia);
?>