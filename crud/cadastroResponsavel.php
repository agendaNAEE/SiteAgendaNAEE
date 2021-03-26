<?php
//include
include_once 'includes/header.php';
//menu
include_once 'html/menuServidor.html';
?>
<script> 
    function validar() {
    var senha = form.senha.value;
    var confirm_senha = form.confirm_senha.value;
    if (senha != confirm_senha) {
        alert('Senhas diferentes');
        form.senha.focus();
        return false;
    }
}
</script>
    <div class="container">
        <h2>Cadastro do Responsável </h2>
        <form action="php_action/create.php" onsubmit="return validar()" method="POST">
            <!---Nome responsavel-->
            <div class="form-group">
                <label for="nomeR">Nome completo:</label>
                <input type="text" class="form-control" id="nomeR" placeholder="Seu nome completo" name="nomeR" required>
            </div>
            <!---Nome do aluno-->
            <div class="form-group">
                <label for="nomeA">Nome do aluno:</label>
                <input type="text" class="form-control" id="nomeA" placeholder="Nome do aluno pelo qual você é responsável" name="nomeA" required>
            </div>
            <!---Grau parentesco-->
            <div class="form-group">
                <label for="gParentesco">Grau de parentesco:</label>
                <input type="text" class="form-control" id="gParentesco" placeholder="Ex: Mãe" name="gParentesco" required>
            </div>
            <!---Email-->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
            <!---Senha-->
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
            </div>
             <!---Confirmar senha-->
             <div class="form-group">
                <label for="confirm_senha">Confirme senha:</label>
                <input type="password" class="form-control" id="confirm_senha" placeholder="Confirme sua senha" name="confirm_senha" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-cadastrarResponsavel">Cadastrar</button>
        </form>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>