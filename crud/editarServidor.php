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
    

    $sql = "SELECT * FROM servidores WHERE id_servidor = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>
<div class="row">

</div>
<div class="col s12 m6 push-m3">
        <h2>Cadastro do Servidor NAEE </h2>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name= "id"value = "<?php echo $dados['id_servidor'];?>">
            <!---Nome-->
            <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['nome_servidor'];?>">
            </div>
            <!---Funçao-->
            <div>
                <label for="funcao">Função:</label>
                <select class="custom-select btn-secundary text-black " id=funcao name=funcao value="<?php echo $dados['funcao'];?>">

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
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $dados['email_servidor'];?>">
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
                    name="confirm_senha">
            </div>
            <button type="submit" class="btn btn btn-primary" name="btn-editarServidor">Atualizar</button>
        </form>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>


   