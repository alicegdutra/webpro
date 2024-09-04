<?php

class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++; 
    }

    public static function getContador() {
        return self::$contador;
    }

    public function calcularDistanciaPonto(Ponto $outroPonto) {
        $deltaX = $this->x - $outroPonto->getX();
        $deltaY = $this->y - $outroPonto->getY();
        return $this->calcularRaizQuadrada($deltaX * $deltaX + $deltaY * $deltaY);
    }

    public function calcularDistanciaCoordenadas($x, $y) {
        $deltaX = $this->x - $x;
        $deltaY = $this->y - $y;
        return $this->calcularRaizQuadrada($deltaX * $deltaX + $deltaY * $deltaY);
    }

    private function calcularRaizQuadrada($numero) {
        if ($numero == 0) {
            return 0;
        }

        $precisao = 0.00001;
        $estimativa = $numero / 2;
        while (abs($estimativa * $estimativa - $numero) > $precisao) {
            $estimativa = ($estimativa + $numero / $estimativa) / 2;
        }

        return $estimativa;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }
}

$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(7, 1);

echo "Distância entre Ponto 1 e Ponto 2: " . $ponto1->calcularDistanciaPonto($ponto2) . "\n";

echo "Distância entre Ponto 1 e coordenadas (0, 0): " . $ponto1->calcularDistanciaCoordenadas(0, 0) . "\n";

echo "Número total de pontos criados: " . Ponto::getContador() . "\n";

?>
