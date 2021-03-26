<?php
//header
include_once 'includes/header.php';
//conexão
include_once 'php_action/db_connect.php';
//menu
include_once 'html/menuServidor.html';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Cadastro do Atendimento</h3>
        <form action="php_action/create.php" method="POST">
            <!---Nome do Aluno-->
            <div class="form-group">
                <label for="listNomeAluno">Nome do Aluno:</label> <br>
                <select name="listNomeAluno" id="listNomeAluno">
                <option>Selecione</option>
                <?php
						$sql= "SELECT * FROM alunos";
						$resultado = mysqli_query($connect, $sql);
						while($dados = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $dados['nome_aluno']; ?>"><?php echo $dados['nome_aluno']; ?></option> <?php
						}
					?>
                </select>
            </div> 
            <!---Nome do Servidor-->
            <div class="form-group">
                <label for="listNomeServidor">Nome do Servidor:</label> <br>
                <select name="listNomeServidor" id="listNomeServidor">
                <?php
						$sql= "SELECT * FROM servidores";
						$resultado = mysqli_query($connect, $sql);
						while($dados = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $dados['nome_servidor']; ?>"><?php echo $dados['nome_servidor']; ?></option> <?php
						}
					?>
                </select>
            </div>
            <!--Calendario-->
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="datetime-local" class="form-control" id="data" name="data" required>
            </div>
            <!--Horario-->
            <div class="form-group">
                <label for="horarioI">Horário Início:</label>
                <input type="datetime-local" class="form-control" id="horarioI" name="horarioI" required>
            </div>
            <div class="form-group">
                <label for="horarioT">Horário Término:</label>
                <input type="datetime-local" class="form-control" id="horarioT" name="horarioT" required>
            </div>
            <!--Observações-->
            <div class="form-group">
                <label for="obs">Observações:</label>
                <input type="textArea" class="form-control" id="obs" name="obs">
            </div>
            <button type="submit" name="btn-cadastrarAtendimento" class="btn btn-primary">Cadastrar Atendimento</button>
                    
        </form>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>