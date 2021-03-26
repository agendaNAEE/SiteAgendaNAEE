<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
//conexao
require_once 'php_action/db_connect.php';
//menu
include_once 'html/menuAluno.html';
//sessao
session_start();
//verificacao
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM alunos WHERE id_aluno= '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
$nome_aluno = $dados['nome_aluno'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home </title>
    </head>
    <body>
        <h2> Olá <?php echo $dados['nome_aluno']; ?> </h2>
        <table class = "table table-striped">
        <thead>
                <tr>
    
                    <th>Nome:</th>
                    <th>Registro Acadêmico:</th>
                    <th>Email Acadêmico:</th>
                    <th>Curso:</th>
                    <th>Período/Ano:</th>
                 </tr>
             </thead>
        <tr>
        <td>   <?php echo $dados['nome_aluno'] ?>   </td>
                    <td> <?php echo $dados['ra']?></td>
                    <td> <?php echo $dados['email_aluno']?></td>
                    <td> <?php echo $dados['curso']?></td>
                    <td> <?php echo $dados['periodo_ano']?></td>
        </tr>
        </table>
        <a href="relatorioNomeAluno.php?nome_aluno=<?php echo $dados['nome_aluno']; ?>"> Ver meus agendamentos</a>

    </body>
        
</html>
