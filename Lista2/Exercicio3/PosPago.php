<?php
require_once 'Celular.php';

class PosPago extends Celular {
    private $desconto = 0.10;

    public function calculaCusto($tempoLigacao) {
        return $tempoLigacao * $this->custoBasePorMinuto * (1 - $this->desconto);
    }
}

$celularPosPago = new PosPago("18", "987654321", 1.00, "Claro");
echo "Custo da ligação (Pós-Pago): R$ " . $celularPosPago->calculaCusto(10) . "\n";
?>
