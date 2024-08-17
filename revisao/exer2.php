<?php require("cabecalho.php"); ?>
<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <label for="hora_inicial" class="form-label">Informe a hora inicial:</label>
            <input type="time" name="hora_inicial" id="hora_inicial" class="form-control"/>
        </div>
        <div class="col">
            <label for="hora_final" class="form-label"> Informe a hora final:</label>
            <input type="time" name="hora_final" id="hora_final" class="form-control"/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="horas_mes" class="form-label">Informe as horas trabalhadas no mês:</label>
            <input type="number" name="horas_mes" id="horas_mes" class="form-control"/>
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">Informe o valor da hora trabalhada (R$):</label>
            <input type="number" step="0.01" name="valor_hora" id="valor_hora" class="form-control"/>
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
    $hora_inicial = new DateTime($_POST['hora_inicial']);
    $hora_final = new DateTime($_POST['hora_final']);
    $diferenca = $hora_final->diff($hora_inicial);
    echo "Diferença de horário: " . $diferenca->format("%h:%I") . "<br>";

    $horas_mes = $_POST['horas_mes'];
    $valor_hora = $_POST['valor_hora'];

    if (($horas_mes) && ($valor_hora)) {
        $salario_mensal = $horas_mes * $valor_hora;
        $salario_semanal = $salario_mensal / 4;
        echo "Salário semanal: R$" . $salario_semanal, 2;
    } else {
        echo "Insira valores válidos para horas trabalhadas e valor da hora.";
    }
}

require("rodape.php"); 
?>
