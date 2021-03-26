<?php
//header
include_once 'includes/header.php';
//menu
include_once 'html/menuServidor.html';
//conexão
include_once 'php_action/db_connect.php';
?>


<div class="row">
    <div class="col s12 m6 push m3">
        <h2>Cadastro de Agendamento</h2>
        <form name="form" action="php_action/create.php" method="POST">
            <!---Aluno-->
            <div class="form-group">
                <label for="aluno_agendamento">Nome do aluno:</label>
                <select name="nomeAluno">
                    <option>Selecione</option>
                    <?php
                    $sql = "SELECT * FROM alunos";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) { ?>
                        <option value="<?php echo $dados['nome_aluno']; ?>"><?php echo $dados['nome_aluno']; ?></option> <?php
                                                                                                                    }
                                                                                                                        ?>
                </select>
            </div>
            <!---Servidor-->
            <div class="form-group">
                <label for="aluno_agendamento">Nome do servidor:</label>
                <select name="nomeServidor">
                    <?php
                    $sql = "SELECT * FROM servidores";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) { ?>
                        <option value="<?php echo $dados['nome_servidor']; ?>"><?php echo $dados['nome_servidor']; ?></option> <?php
                                                                                                                            }
                                                                                                                                ?>
                </select>
            </div>
            <!---Data/Horário-->
            <div class="form-group">
                <label for="data_horario">Data e horário do atendimento:</label>
                <input type="datetime-local" class="form-control" id="data_horario" name="data_horario">
            </div>

            <button type="submit" class="btn btn-primary" name="btn-cadastrarAgendamento">Cadastrar</button>
        </form>


    </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>