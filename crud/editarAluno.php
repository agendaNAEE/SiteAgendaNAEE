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
    

    $sql = "SELECT * FROM alunos WHERE id_aluno = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class = "row">
    <div class= "col s12 m6 push m3" >
        <h2>Cadastro do Aluno</h2>
        <form action= "php_action/update.php" method ="POST">
        <input type="hidden" name= "id"value = "<?php echo $dados['id_aluno'];?>">
            <!---Nome-->
            <div class= "form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" value="<?php echo $dados['nome_aluno'];?>">
            </div>
             <!---RA-->
             <div class= "form-group">
                <label for="ra">Registro Acadêmico:</label>
                <input type="text" class="form-control" id="ra" placeholder="Registro Acadêmico" name="ra" value="<?php echo $dados['ra'];?>">
            </div>
            <!---Email-->
            <div class="form-group">
                <label for="email">Email Acadêmico:</label>
                <input type="email" class="form-control" id="email" placeholder="Email Acadêmico" name="email" value="<?php echo $dados['email_aluno'];?>">
            </div>
            <!---Curso-->
             <div>
                <label for="curso">Curso:</label>
                <select class="custom-select btn-secundary text-black " id="curso" name="curso" value="<?php echo $dados['curso'];?>">
                    <option value="informática">Informática</option>
                    <option value="administração">Administração</option>
                    <option value="metalurgia">Metalurgia</option>
                </select>
            </div>
            <!---Período/Ano-->
            <div>
                <label for="periodo_ano">Período/Ano:</label>
                <select class="custom-select btn-secundary text-black " id="periodo_ano" name="periodo_ano" value="<?php echo $dados['periodo_ano'];?>">
                <option value="1ano">1° ano</option>
                    <option value="2ano">2° ano</option>
                    <option value="3ano">3° ano</option>
                    <option value="1periodo">1° período</option>
                    <option value="2periodo">2° período</option>
                    <option value="3periodo">3° período</option>
                    <option value="4periodo">4° período</option>
                    <option value="5periodo">5° período</option>
                    <option value="6periodo">6° período</option>
                    <option value="7periodo">7° período</option>
                    <option value="8periodo">8° período</option>
                    <option value="9periodo">9° período</option>
                    <option value="10periodo">10° período</option>
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
            <button type="submit" class="btn btn-primary" name="btn-editarAluno">Atualizar</button>
        </form>
        
       
    </div>]
</div>
<?php
//footer
include_once 'includes/footer.php';
?>
