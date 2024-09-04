<?php
require_once 'Servente.php';
require_once 'Motorista.php';
require_once 'MestreDeObras.php';

$servente = new Servente(1, 'Alice', 1500.00);
$motorista = new Motorista(2, 'Giovana', 2500.00, '12345-AB');
$mestreDeObras = new MestreDeObras(3, 'Luiza', 3000.00, 15);

echo 'Servente: ' . $servente->getNome() . ' - Salário líquido: ' . $servente->getSalarioLiquido() . "\n";
echo 'Motorista: ' . $motorista->getNome() . ' - Salário líquido: ' . $motorista->getSalarioLiquido() . "\n";
echo 'Mestre de Obras: ' . $mestreDeObras->getNome() . ' - Salário líquido: ' . $mestreDeObras->getSalarioLiquido() . "\n";
?>
