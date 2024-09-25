<?php

require_once 'Empleado.php';
require_once 'Evaluable.php';

class Gerente extends Empleado implements Evaluable {
    private $departamento;

    public function __construct($nombre, $idEmpleado, $salarioBase, $departamento) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->departamento = $departamento;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function asignarBono($monto) {
        $nuevoSalario = $this->getSalarioBase() + $monto;
        $this->setSalarioBase($nuevoSalario);
    }

    public function evaluarDesempenio() {
        // Lógica de evaluación para Gerente
        return "Gerente " . $this->getNombre() . " evaluado positivamente.";
    }
}
?>
