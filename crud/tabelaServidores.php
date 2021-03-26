<?php
//sessão
session_start();
//if(isset($_SESSION['mensagem'])):
    //echo $_SESSION['mensagem'];
//endif;
//verificacao
if(!isset($_SESSION['logado'])){
  header('Location: ../index.php');
}

//conexão
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';
include 'html/menuServidor.html';
?>

<?php
include_once 'includes/footer.php';
?>
<div class = "row">
    <div class=col s12 m6 push m3 >
    <h3 class="light"> Servidores </h3>
    <table class = "table table-striped">
    <thead>
    <tr>
    
        <th>Nome:</th>
        <th>Função:</th>
        <th>Email:</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT * FROM servidores ORDER BY nome_servidor ASC";
        $resultado = mysqli_query($connect, $sql);
        while($dados = mysqli_fetch_array($resultado)): 
        ?>
        <tr>
            <td> <?php echo $dados['nome_servidor']?></td>
            <td> <?php echo $dados['funcao']?></td>
            <td> <?php echo $dados['email_servidor']?></td>
            <td><a href="editarServidor.php?id=<?php echo $dados['id_servidor']; ?>" class="btn btn-secundary"><img src="../bootstrap-icons-1.1.0/pencil-square.svg" ></a></td>
            <td><a href="#modal<?php echo $dados['id_servidor'];?>" class="btn btn-secundary" data-toggle="modal" data-target="#modal<?php echo $dados['id_servidor'];?>"><img src="../bootstrap-icons-1.1.0/trash.svg" ></a></td>

 <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $dados['id_servidor']; ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="php_action/delete.php" method = "POST">
                <input type="hidden" name="id" value="<?php echo $dados['id_servidor'];?>"> 
            <button type="submit" name="btn-deletarServidor" class="btn btn-danger">Excluir</button>
            </form>
      </div>
    </div>
  </div>
</div>
        </tr>
        <?php endwhile; ?>

    </tbody>
    </table>
    </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>
   