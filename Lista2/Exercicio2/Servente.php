<?php
require_once 'Funcionario.php';

class Servente extends Funcionario {
    private $insalubridade = 0.05;

    public function calcularSalario() {
        return $this->salario * (1 + $this->insalubridade);
    }
}

$servente = new Servente("Gabriela", 2000);
echo "Salário do Servente: " . $servente->calcularSalario() . "\n";
?>
