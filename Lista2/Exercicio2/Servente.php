<?php
require_once 'Funcionario.php';

class Servente extends Funcionario {

    public function __construct($codigo, $nome, $salarioBase) {
        parent::__construct($codigo, $nome, $salarioBase);
    }

    public function getSalarioLiquido() {
        $adicionalInsalubridade = $this->salarioBase * 0.05;
        return parent::getSalarioLiquido() + $adicionalInsalubridade;
    }
}
?>
