<?php require("cabecalho.php"); ?>
<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_funcionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="lucros" class="form-label">Lucro da Empresa (R$):</label>
            <input type="number" step="0.01" name="lucros" id="lucros" class="form-control"/>
        </div>
        <div class="col">
            <label for="desempenho" class="form-label">Escala de Desempenho (1 a 5):</label>
            <input type="number" name="desempenho" id="desempenho" class="form-control" min="1" max="5"/>
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
    $nome_funcionario = $_POST['nome_funcionario'];
    $lucros = $_POST['lucros'];
    $desempenho = $_POST['desempenho'];

    if ($lucros && $desempenho && $desempenho >= 1 && $desempenho <= 5) {
        $percentuais = [
            1 => 0.001,  
            2 => 0.0025, 
            3 => 0.004,  
            4 => 0.0055, 
            5 => 0.007
        ];
        $percentual_bonus = $percentuais[$desempenho];
        $bonus = $lucros * $percentual_bonus;

        echo "<p>Funcionário: <strong>$nome_funcionario</strong></p>";
        echo "<p>Desempenho: <strong>$desempenho</strong></p>";
        echo "<p>Bônus Recebido: <strong>R$" . number_format($bonus, 2, ',', '.') . "</strong></p>";
    } else {
        echo "Insira valores válidos para lucros e desempenho (entre 1 e 5).";
    }
}


require("rodape.php"); 
?>
