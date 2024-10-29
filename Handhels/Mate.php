<?php

header('Content-Type: text/html; charset=utf-8');

//imprimir en pantalla
echo("<h1>Empezemos con matemeticas</h1>");

$X = 21;
$Y = 15;

$suma = $X + $Y;
$resta = $X - $Y;
$multiplicacion = $X * $Y;
$division = $X / $Y;


echo("La suma de 21+15 es igual a: $suma<br>");
echo("La resta de 21-15 es igual a: $resta<br>");
echo("La multiplicacion de 21X15 es igual a: $multiplicacion<br>");
echo("La division de 21/15 es igual a: $division<br>");

?>