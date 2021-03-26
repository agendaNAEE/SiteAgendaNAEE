
<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//menu
include_once 'html/menuServidor.html';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    

    $sql = "SELECT * FROM responsaveis WHERE id_responsavel = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>
<head>
    
</head>

<body>
    <div class="container">
        <h2>Cadastro do Responsável </h2>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name= "id"value = "<?php echo $dados['id_responsavel'];?>">
            <!---Nome responsavel-->
            <div class="form-group">
                <label for="nomeR">Nome completo:</label>
                <input type="text" class="form-control" id="nomeR" placeholder="Seu nome completo" name="nomeR" value="<?php echo $dados['nome_responsavel'];?>">
            </div>
            <!---Nome do aluno-->
            <div class="form-group">
                <label for="nomeA">Nome do aluno:</label>
                <input type="text" class="form-control" id="nomeA" placeholder="Nome do aluno pelo qual você é responsável" name="nomeA"value="<?php echo $dados['nome_aluno'];?>">
            </div>
            <!---Grau parentesco-->
            <div class="form-group">
                <label for="gParentesco">Grau de parentesco:</label>
                <input type="text" class="form-control" id="gParentesco" placeholder="Ex: Mãe" name="gParentesco" value="<?php echo $dados['grau_parentesco'];?>">
            </div>
            <!---Email-->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $dados['email_responsavel'];?>">
            </div>
            <!---Senha-->
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
            </div>
             <!---Confirmar senha-->
             <div class="form-group">
                <label for="confirm_senha">Confirme senha:</label>
                <input type="password" class="form-control" id="confirm_senha" placeholder="Confirme sua senha" name="confirm_senha">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-editarResponsavel">Atualizar</button>
        </form>
    </div>
    <?php
//footer
include_once 'includes/footer.php';
?>

</body>

</html>