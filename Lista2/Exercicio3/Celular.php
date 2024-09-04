<?php
require_once 'Telefone.php';

abstract class Celular extends Telefone {
    protected $custoBasePorMinuto;
    protected $operadora;

    public function __construct($ddd, $numero, $custoBasePorMinuto, $operadora) {
        parent::__construct($ddd, $numero);
        $this->custoBasePorMinuto = $custoBasePorMinuto;
        $this->operadora = $operadora;
    }
}

?>
