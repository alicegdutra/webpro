<?php require("cabecalho.php"); ?>

<h1>Desempenho do Projeto</h1>
<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo" class="form-label">Informe o prazo total do projeto (em dias):</label>
            <input type="number" name="prazo" id="prazo" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_total" class="form-label">Informe o número total de atividades:</label>
            <input type="number" name="atividades_total" id="atividades_total" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="atividades_concluidas" class="form-label">Informe o número de atividades já concluídas:</label>
            <input type="number" name="atividades_concluidas" id="atividades_concluidas" class="form-control" required />
        </div>
        <div class="col">
            <label for="produtividade_diaria" class="form-label">Informe a produtividade diária da equipe (atividades por dia):</label>
            <input type="number" name="produtividade_diaria" id="produtividade_diaria" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Simular</button>
        </div>
    </div>
</form>

<?php 
if ($_POST) {
    $prazo = $_POST['prazo'];
    $atividades_total = $_POST['atividades_total'];
    $atividades_concluidas = $_POST['atividades_concluidas'];
    $produtividade_diaria = $_POST['produtividade_diaria'];

    $atividades_restantes = $atividades_total - $atividades_concluidas;

    $dias_necessarios = $atividades_restantes / $produtividade_diaria;
    if ($atividades_restantes % $produtividade_diaria != 0) {
        $dias_necessarios = ($atividades_restantes - ($atividades_restantes % $produtividade_diaria)) / $produtividade_diaria + 1;
    } else {
        $dias_necessarios = $atividades_restantes / $produtividade_diaria;
    }

    $dias_consumidos = $atividades_concluidas / $produtividade_diaria;
    if ($atividades_concluidas % $produtividade_diaria != 0) {
        $dias_consumidos = ($atividades_concluidas - ($atividades_concluidas % $produtividade_diaria)) / $produtividade_diaria + 1;
    } else {
        $dias_consumidos = $atividades_concluidas / $produtividade_diaria;
    }

    $dias_restantes = $prazo - $dias_consumidos;

    $status = $dias_necessarios <= $dias_restantes ? "O projeto está no prazo!" : "O projeto está atrasado!";

    echo "
    <div class='mt-3'>
        <h2>Simulação de Desempenho</h2>
        <p>Prazo total do projeto: $prazo dias</p>
        <p>Atividades totais: $atividades_total</p>
        <p>Atividades concluídas: $atividades_concluidas</p>
        <p>Produtividade diária: $produtividade_diaria atividades por dia</p>
        <p>Atividades restantes: $atividades_restantes</p>
        <p>Dias restantes: $dias_restantes dias</p>
        <p>Dias necessários para concluir o projeto: $dias_necessarios dias</p>
        <h3>Status do projeto: $status</h3>
    </div>";
}

require("rodape.php"); 
?>
