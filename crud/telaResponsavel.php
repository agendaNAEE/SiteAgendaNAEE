<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
//conexao
require_once 'php_action/db_connect.php';
//menu
include_once 'html/menuResponsavel.html';
//sessao
session_start();
//verificacao
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM responsaveis WHERE id_responsavel= '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home </title>
    </head>
    <body>
        <h2> Olá <?php echo $dados['nome_responsavel']; ?> </h2>
        <table class = "table table-striped">
        <thead>
                <tr>
    
                    <th>Nome:</th>
                    <th>Nome do Aluno:</th>
                    <th>Grau de Parentesco:</th>
                    <th>Email:</th>
                 </tr>
             </thead>
        <tr>
                    <td> <?php echo $dados['nome_responsavel']?></td>
                    <td> <?php echo $dados['nome_aluno']?></td>
                    <td> <?php echo $dados['grau_parentesco']?></td>
                    <td> <?php echo $dados['email_responsavel']?></td>
        </tr>
        </table>
        <!--dados parte da consulta-->
        <a href="relatorioAtendimentosResponsavelAluno?nome_aluno=<?php echo $dados['nome_aluno']; ?>"> Ver atendimentos do aluno</a>
        
</html>
