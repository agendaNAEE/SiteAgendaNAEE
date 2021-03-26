<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
//menu
include_once 'html/menuServidor.html';
//conexao
require_once 'php_action/db_connect.php';
//sessao
session_start();
//verificacao
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM servidores WHERE id_servidor= '$id'";
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
        <h2> Olá <?php echo $dados['nome_servidor']; ?> </h2>
        <table class = "table table-striped">
        <thead>
                <tr>
    
                    <th>Nome:</th>
                    <th>Função:</th>
                    <th>Email:</th>
                 </tr>
             </thead>
        <tr>
                    <td> <?php echo $dados['nome_servidor']?></td>
                    <td> <?php echo $dados['funcao']?></td>
                    <td> <?php echo $dados['email_servidor']?></td>
        </tr>
        </table>
    </html>
