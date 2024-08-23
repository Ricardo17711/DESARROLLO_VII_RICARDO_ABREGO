<?php

// 1. Patrón de triángulo rectángulo usando asteriscos.
echo "<h1>Triángulo Rectángulo</h1>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

// 2. Secuencia de números impares del 1 al 20 usando un bucle while.
echo "<h1>Secuencia de Números Impares del 1 al 20</h1>";
$num = 1;
while ($num <= 20) {
    if ($num % 2 != 0) { // Verifica si el número es impar
        echo $num . "<br>";
    }
    $num++;
}

// 3. Contador regresivo desde 10 hasta 1 usando un bucle do-while, saltando el número 5.
echo "<h1>Contador Regresivo con Salto del Número 5</h1>";
$contador = 10;
do {
    if ($contador != 5) { // Salta el número 5.
        echo $contador . "<br>";
    }
    $contador--;
} while ($contador >= 1);
?>
