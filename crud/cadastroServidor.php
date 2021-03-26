 <?php
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
<div class="col s12 m6 push-m3">
        <h2>Cadastro do Servidor NAEE </h2>
        <form name="form" action="php_action/create.php" onsubmit="return validar()" method="POST">
            <!---Nome-->
            <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" required>
            </div>
            <!---Funçao-->
            <div>
                <label for="funcao">Função:</label>
                <select class="custom-select btn-secundary text-black " id=funcao name=funcao>

                    <option value="assistenteSocial">Assistente Social</option>
                    <option value="interpreteDeLibras">Intérprete de Libras</option>
                    <option value="enfermeiro">Enfermeiro(a)</option>
                    <option value="pedagogo">Pedagogo(a)</option>
                    <option value="psicologo">Psicólogo(a)</option>
                    <option value="outro">Outro</option>
                </select>
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
                <input type="password" class="form-control" id="confirm_senha" placeholder="Confirme sua senha"
                    name="confirm_senha" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn-cadastrarServidor">Cadastrar</button>
        </form>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>


   