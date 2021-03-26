<?php

//conexão
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';

//mensagem 
//include_once 'includes/message.php';
include 'html/menuAluno.html';



?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Agendamentos </h3>
        <table class="table table-striped">
            <thead>
                <tr><th>Nome do aluno:</th>
                    <th>Nome do servidor:</th>
                    <th>Data e horário do agendamento:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nome_aluno = $_GET["nome_aluno"];
                $sql = "SELECT * FROM agendamentos WHERE aluno_agendamento='$nome_aluno '";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado)>0):
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                <td><?php echo $dados['aluno_agendamento']; ?></td>
                  <td><?php echo $dados['servidor_agendamento']; ?></td>
                  <td><?php echo $dados['data_horario']; ?></td>
                </tr>
            <?php 
                endwhile; 
                else:?>
                    <tr>
                        <th> Sem agendamentos</th>
                        
                    </tr>
                <?php
                endif;
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>