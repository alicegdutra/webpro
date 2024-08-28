<?php require("cabecalho.php"); ?>

<h1>Estimativa de Custo do Projeto</h1>
<form action="exer6.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_previstas" class="form-label">Informe as horas previstas:</label>
            <input type="number" name="horas_previstas" id="horas_previstas" class="form-control" required />
        </div>
        <div class="col">
            <label for="taxa_hora" class="form-label">Informe a taxa por hora (R$):</label>
            <input type="number" name="taxa_hora" id="taxa_hora" class="form-control" required />
        </div>
        <div class="col">
            <label for="custos_adicionais" class="form-label">Informe os custos adicionais (R$):</label>
            <input type="number" name="custos_adicionais" id="custos_adicionais" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php 
if ($_POST) {
    $horas_previstas = $_POST['horas_previstas'];
    $taxa_hora = $_POST['taxa_hora'];
    $custos_adicionais = $_POST['custos_adicionais'];

    //MÃO DE OBRA:
    $custo_mao_obra = $horas_previstas * $taxa_hora;

    //PROJETO:
    $custo_total_projeto = $custo_mao_obra + $custos_adicionais;

    echo "<div class='mt-3'>";
    echo "<h2>Estimativa de Custos</h2>";
    echo "<p>Custo de Mão de Obra: R$" . number_format($custo_mao_obra, 2, ',', '.') . "</p>";
    echo "<p>Custo Total do Projeto: R$" . number_format($custo_total_projeto, 2, ',', '.') . "</p>";
    echo "</div>";
}

require("rodape.php"); 
?>
