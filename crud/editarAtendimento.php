<?php
//conexão 
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//menu
include_once 'html/menuServidor.html';
//select
if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM atendimento WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Editar Atendimento</h3>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name = "id" value="<?php echo $dados['id'];?>" >
        <!---Nome do Aluno-->
        <div class="form-group">
            <label for="listNomeAluno">Nome do Aluno:</label> <br>
            <input type="text" class="form-control" id="listNomeAluno" placeholder="Nome do aluno" 
                name="listNomeAluno"  value="<?php echo $dados['nome_aluno'];?>" >
        </div>
        <!---Nome do Servidor-->
        <div class="form-group">
            <label for="listNomeServidor">Nome do Servidor:</label> <br>
            <input type="text" class="form-control" id="listNomeServidor" placeholder="Nome do servidor" 
                name="listNomeServidor"  value="<?php echo $dados['nome_servidor'];?>" >
        </div>
        <!--Calendario-->
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="datetime-local" class="form-control" id="data"  name="data" 
                value="<?php echo $dados['data'];?>" >
        </div>
        <!--Horario-->
        <div class="form-group">
            <label for="horarioI">Horário Início:</label>
            <input type="datetime-local" class="form-control" id="horarioI"  name="horarioI" 
                value="<?php echo $dados['hora_inicio'];?>" >
        </div>
        <div class="form-group">
            <label for="horarioT">Horário Término:</label>
            <input type="datetime-local" class="form-control" id="horarioT"  name="horarioT" 
                value="<?php echo $dados['hora_termino'];?>" >
        </div>
        <!--Observações-->
        <div class="form-group">
            <label for="obs">Observações:</label>
            <input type="textArea" class="form-control" id="obs" name="obs"
                value="<?php echo $dados['observacoes'];?>" >
        </div>
        <button type="submit" name="btn-editar" class="btn btn-primary">Atualizar</button>
        
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>