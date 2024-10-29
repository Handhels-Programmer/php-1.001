<?php

header('Content-Type: text/html; charset=utf-8');

//imprimir en pantalla
echo("<h1>Handhels Valera</h1>");

echo("<p>Hola mundo soy goku</p>");

//Definir Variable
$nombre = "Handhels Valera";
$edad = 34;
$altura = 6.4;
$estoyenclase = false;
$fruta = array("Manzana Verde", "Uva Verde");

echo "Mi nombre es: $nombre tengo $edad años de edad y mido $altura<br>";
echo "$estoyenclase";
echo "Mi fruta favorita es:" . implode (", ",$fruta);

?>
