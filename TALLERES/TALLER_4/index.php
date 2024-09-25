<?php

require_once 'Gerente.php';
require_once 'Desarrollador.php';
require_once 'Empresa.php';

$empresa = new Empresa();

$gerente1 = new Gerente("Carlos", 1, 50000, "IT");
$desarrollador1 = new Desarrollador("Ana", 2, 30000, "PHP", "Senior");

$empresa->agregarEmpleado($gerente1);
$empresa->agregarEmpleado($desarrollador1);

echo "Lista de empleados:\n";
$empresa->listarEmpleados();

echo "Nómina total: " . $empresa->calcularNominaTotal() . "\n";

echo "Evaluaciones de desempeño:\n";
$empresa->evaluarDesempenio();
?>
