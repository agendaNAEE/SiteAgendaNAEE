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
    

    $sql = "SELECT * FROM agendamentos WHERE id_agendamento = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

//data e horário
$part1 = strstr($dados["data_horario"], ' ', true);
$part2 = strstr($dados["data_horario"], ' ', false);
$part2 = substr($part2, 1);

$data_horario = $part1 . "T" . $part2;
?>

<div class = "row">
    <div class= "col s12 m6 push m3" >
        <h2>Editar Agendamento</h2>
        <form name="form" action= "php_action/update.php"  method ="POST">
        <input type="hidden" name= "id"value = "<?php echo $dados['id_agendamento'];?>">
            <!---Aluno-->
            <div class= "form-group">
                <label for="aluno_agendamento">Nome do aluno:</label>
                <input type="text" class="form-control" id="aluno_agendamento" placeholder="Nome do aluno" 
                name="aluno_agendamento"  value="<?php echo $dados['aluno_agendamento'];?>" >
            </div>
               <!---Servidor-->
               <div class= "form-group">
                <label for="servidor_agendamento">Nome do servidor:</label>
                <input type="text" class="form-control" id="servidor_agendamento" placeholder="Nome do servidor"
                 name="servidor_agendamento" value="<?php echo $dados['servidor_agendamento'];?>">
            </div>
               <!---Data/Horário-->
               <div class= "form-group">
                <label for="data_horario">Data e horário do atendimento:</label>
                <input type="datetime-local" class="form-control" id="data_horario"  name="data_horario" 
                value="<?php echo $data_horario;?>" >
            </div>
             
            <button type="submit" class="btn btn-primary" name="btn-editarAgendamento">Atualizar</button>
            <a href="tabelaAgendamentos.php" class="btn btn-primary">Agenda</a>
        </form>
       
    </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>