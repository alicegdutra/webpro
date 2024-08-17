<?php require("cabecalho.php"); ?>
<h1>Exercício 5</h1>
<form action="exer6.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_func" class="form-label">Informe o nome:</label>
            <input type="text" name="nome_func" id="nome_func" class="form-control"/>
        </div>
        <div class="col">
            <label for="dias" class="form-label"> Informe a quantidade de dias trabalhados:</label>
            <input type="number" name="dias" id="dias" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>

<?php 
if ($_POST){
    $nome_func = $_POST['nome_func'];
    $dias = $_POST['dias'];;

    if ($dias >= 30) {
        $ferias = $horas_mes * $valor_hora;
        $salario_semanal = $salario_mensal / 4;
        echo "Salário semanal: R$" . $salario_semanal, 2;
    } else {
        echo "Insira valores válidos para horas trabalhadas e valor da hora.";
    }
}

require("rodape.php"); 
?>
