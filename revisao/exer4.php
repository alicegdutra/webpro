<?php require("cabecalho.php"); ?>

<h1>Atribuição de Tarefas</h1>
<form action="exer4.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control" required/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="horas_tarefa" class="form-label">Total de Horas da Tarefa:</label>
            <input type="number" step="0.01" name="horas_tarefa" id="horas_tarefa" class="form-control" required/>
        </div>
        <div class="col">
            <label for="complexidade" class="form-label">Complexidade da Tarefa:</label>
            <select name="complexidade" id="complexidade" class="form-control" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="nome_funcionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control" required/>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <label for="horas_disponiveis" class="form-label">Horas Disponíveis do Funcionário:</label>
            <input type="number" step="0.01" name="horas_disponiveis" id="horas_disponiveis" class="form-control" required/>
        </div>
        <div class="col">
            <label for="nivel_experiencia" class="form-label">Nível de Experiência:</label>
            <select name="nivel_experiencia" id="nivel_experiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
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
    $nome_tarefa = $_POST['nome_tarefa'];
    $horas_tarefa = $_POST['horas_tarefa'];
    $complexidade = $_POST['complexidade'];
    $nome_funcionario = $_POST['nome_funcionario'];
    $horas_disponiveis = $_POST['horas_disponiveis'];
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $horas_necessarias = $horas_tarefa * 1.1;

    $assumir = false;

    if ($horas_disponiveis >= $horas_necessarias) {
        if ($nivel_experiencia == 'junior' && $complexidade == 'baixa') {
            $assumir = true;
        } elseif ($nivel_experiencia == 'pleno' && in_array($complexidade, ['baixa', 'media'])) {
            $assumir = true;
        } elseif ($nivel_experiencia == 'senior' && in_array($complexidade, ['media', 'alta'])) {
            $assumir = true;
        }
    }

    if ($assumir) {
        echo "<p>O funcionário <strong>$nome_funcionario</strong> pode realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
    } else {
        echo "<p>O funcionário <strong>$nome_funcionario</strong> <strong>não</strong> pode realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
    }
}

require("rodape.php"); 
?>
