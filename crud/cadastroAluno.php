<?php
//header
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
<div class = "row">
    <div class= "col s12 m6 push m3" >
        <h2>Cadastro do Aluno</h2>
        <form name="form" action= "php_action/create.php" onsubmit="return validar()" method ="POST">
            <!---Nome-->
            <div class= "form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" >
            </div>
             <!---RA-->
             <div class= "form-group">
                <label for="ra">Registro Acadêmico:</label>
                <input type="text" class="form-control" id="ra" placeholder="Registro Acadêmico" name="ra" >
            </div>
            <!---Email-->
            <div class="form-group">
                <label for="email">Email Acadêmico:</label>
                <input type="email" class="form-control" id="email" placeholder="Email Acadêmico" name="email" >
            </div>
            <!---Curso-->
             <div>
                <label for="curso">Curso:</label>
                <select class="custom-select btn-secundary text-black " id="curso" name="curso">
                    <option value="Informática">Informática</option>
                    <option value="Administração">Administração</option>
                    <option value="Metalurgia">Metalurgia</option>
                </select>
            </div>
            <!---Período/Ano-->
            <div>
                <label for="periodo_ano">Período/Ano:</label>
                <select class="custom-select btn-secundary text-black " id="periodo_ano" name="periodo_ano">
                <option value="1ano">1° ano</option>
                    <option value="2° ano">2° ano</option>
                    <option value="3° ano">3° ano</option>
                    <option value="1° periodo">1° período</option>
                    <option value="2° periodo">2° período</option>
                    <option value="3° periodo">3° período</option>
                    <option value="4° periodo">4° período</option>
                    <option value="5° periodo">5° período</option>
                    <option value="6° periodo">6° período</option>
                    <option value="7° periodo">7° período</option>
                    <option value="8° periodo">8° período</option>
                    <option value="9° periodo">9° período</option>
                    <option value="10° periodo">10° período</option>
                </select>
            </div>
            <!---Senha-->
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
            </div>
            <!---Confirmar senha-->
            <div class="form-group">
                <label for="confirm_senha">Confirme senha:</label>
                <input type="password" class="form-control" id="confirm_senha" placeholder="Confirme sua senha"
                    name="confirm_senha" >
            </div>
            <button type="submit" class="btn btn-primary" name="btn-cadastrarAluno">Cadastrar</button>
        </form>
        
       
    </div>]
</div>
<?php
//footer
include_once 'includes/footer.php';
?>
