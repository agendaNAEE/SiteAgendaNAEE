<?php

//conexão
include_once 'php_action/db_connect.php';

//header
include_once 'includes/header.php';

//mensagem 
//include_once 'includes/message.php';
include 'html/menuServidor.html';

$nome_aluno = $_GET["nome_aluno"];
$sql = "SELECT * FROM atendimento WHERE nome_aluno='$nome_aluno '";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Relatório dos atendimentos de <?php echo $dados['nome_aluno']; ?> </h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome do Aluno: </th>
                    <th>Nome do Servidor: </th>
                    <th>Calendário: </th>
                    <th>Horário Início: </th>
                    <th>Horário Término: </th>
                    <th>Observações: </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nome_aluno = $_GET["nome_aluno"];
                $sql = "SELECT * FROM atendimento WHERE nome_aluno='$nome_aluno '";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado)>0):
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td>
                        <?php echo $dados['nome_aluno']?>
                    </td>
                    <td><?php echo $dados['nome_servidor']?></td>
                    <td><?php echo $dados['data']?></td>
                    <td><?php echo $dados['hora_inicio']?></td>
                    <td><?php echo $dados['hora_termino']?></td>
                    <td><?php echo $dados['observacoes']?></td>
                    <td><a href="editarAtendimento.php?id= <?php echo $dados['id'];?>" class="btn btn-secundary"><img src="../bootstrap-icons-1.1.0/pencil-square.svg"></i></a></td>

                    <td><a href="#modal <?php echo $dados['id']?>" class="btn btn-secundary" data-toggle="modal" data-target="#modal<?php echo $dados['id']; ?>"><img src="../bootstrap-icons-1.1.0/trash.svg"></i></a></td>
                    

                </tr>
            <?php 
                endwhile; 
                else:?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
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