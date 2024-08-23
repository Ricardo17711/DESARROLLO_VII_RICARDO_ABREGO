<?php
// Definición de variables
$nombre_completo = "Ricardo Agustin,  Abrego Bailey.";      
$edad = 21;                           
$correo = "ricardo.abrego1@utp.ac.pa";   
$telefono = "6583-0368";           

// Definición de una constante
define("OCUPACION", "Ayudante General"); 

// Imprimir un párrafo con diferentes métodos de concatenación e impresión

// Usando echo
echo "<p>Nombre completo: " . $nombre_completo . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Teléfono: " . $telefono . "<br>";
echo "Ocupación: " . OCUPACION . "</p>";

// Usando print
print "<p>Nombre completo: " . $nombre_completo . "<br>";
print "Edad: " . $edad . "<br>";
print "Correo: " . $correo . "<br>";
print "Teléfono: " . $telefono . "<br>";
print "Ocupación: " . OCUPACION . "</p>";

// Usando printf
printf("<p>Nombre completo: %s<br>", $nombre_completo);
printf("Edad: %d<br>", $edad);
printf("Correo: %s<br>", $correo);
printf("Teléfono: %s<br>", $telefono);
printf("Ocupación: %s</p>", OCUPACION);

// Usar var_dump para mostrar el tipo y valor de cada variable y constante
echo "<h2>Información de Variables y Constantes:</h2>";
echo "<pre>";
var_dump($nombre_completo);
var_dump($edad);
var_dump($correo);
var_dump($telefono);
var_dump(OCUPACION);
echo "</pre>";
?>
