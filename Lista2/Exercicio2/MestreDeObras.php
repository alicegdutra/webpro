<?php
require_once 'Servente.php';

class MestreDeObras extends Servente {
    private $funcionariosSupervisionados;

    public function __construct($nome, $salario, $funcionariosSupervisionados) {
        parent::__construct($nome, $salario);
        $this->funcionariosSupervisionados = $funcionariosSupervisionados;
    }

    public function calcularSalario() {
        $adicional = (int)($this->funcionariosSupervisionados / 10) * 0.10;
        return parent::calcularSalario() * (1 + $adicional);
    }

    public function getFuncionariosSupervisionados() {
        return $this->funcionariosSupervisionados;
    }

    public function setFuncionariosSupervisionados($funcionariosSupervisionados) {
        $this->funcionariosSupervisionados = $funcionariosSupervisionados;
    }
}

$mestreDeObras = new MestreDeObras("Alice", 3000, 25);
echo "Salário do Mestre de Obras: " . $mestreDeObras->calcularSalario() . "\n";
echo "Funcionários supervisionados pelo Mestre de Obras: " . $mestreDeObras->getFuncionariosSupervisionados() . "\n";
?>
