<?php
require_once 'Telefone.php';

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempoLigacao) {
        return $tempoLigacao * $this->custoPorMinuto;
    }
}

$telefoneFixo = new Fixo("18", "322459816", 0.50);
echo "Custo da ligação (Fixo): R$ " . $telefoneFixo->calculaCusto(10) . "\n";
?>
