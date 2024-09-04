<?php
require_once 'Celular.php';

class PrePago extends Celular {
    private $acrescimo = 0.40;

    public function calculaCusto($tempoLigacao) {
        return $tempoLigacao * $this->custoBasePorMinuto * (1 + $this->acrescimo);
    }
}

$celularPrePago = new PrePago("18", "997382850", 1.00, "Vivo");
echo "Custo da ligação (Pré-Pago): R$ " . $celularPrePago->calculaCusto(10) . "\n";
?>
