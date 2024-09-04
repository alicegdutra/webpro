<?php
require_once 'Funcionario.php';

class Motorista extends Funcionario {
    private $numeroCarteira;

    public function __construct($nome, $salario, $numeroCarteira) {
        parent::__construct($nome, $salario);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira() {
        return $this->numeroCarteira;
    }

    public function setNumeroCarteira($numeroCarteira) {
        $this->numeroCarteira = $numeroCarteira;
    }
}

$motorista = new Motorista("Luiza", 3000, "123456789");
echo "Salário do Motorista: " . $motorista->calcularSalario() . "\n";
?>
