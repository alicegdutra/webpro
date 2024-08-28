<?php require("cabecalho.php"); ?>

<h1>Férias - Verificação</h1>
<form action="exer5.php" method="post">
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
    $dias = $_POST['dias'];

    if ($dias > 0) {
        $ferias = ($dias / 30);
        if ($ferias > 30) {
            $ferias = 30;
        }

        echo "<div class='mt-3'>";
        echo "<h2>$nome_func</h2>";
        echo "<p>Dias trabalhados: $dias</p>";
        echo "<p>Dias de férias acumulados: $ferias</p>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Por favor, insira uma quantidade válida de dias trabalhados.</div>";
    }
}

require("rodape.php"); 
?>
