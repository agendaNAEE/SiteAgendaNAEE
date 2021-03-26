<?php
//sessão
session_start();
// conexao
require_once 'db_connect.php';

//editar cadastro de servidor
if(isset($_POST['btn-editarServidor'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $funcao = mysqli_escape_string($connect, $_POST['funcao']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE servidores SET nome_servidor = '$nome', funcao = '$funcao', email_servidor = '$email', senha = '$senha' WHERE id_servidor = '$id'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../tabelaServidores.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao atualizar!";
        header('Location: ../tabelaServidores.php');
    endif; 
    $connect->close();  
endif;

//editar cadastro de aluno
if(isset($_POST['btn-editarAluno'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $ra = mysqli_escape_string($connect, $_POST['ra']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $curso = mysqli_escape_string($connect, $_POST['curso']);
    $periodo_ano = mysqli_escape_string($connect, $_POST['periodo_ano']);
    
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql =  "UPDATE alunos SET nome_aluno = '$nome', ra = '$ra', email_aluno = '$email', curso = '$curso', periodo_ano = '$periodo_ano' WHERE id_aluno = '$id'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../tabelaAlunos.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao atualizar!";
        header('Location: ../tabelaAlunos.php');
    endif;   
    $connect->close();
endif;
//editar cadastro de responsavel
if(isset($_POST['btn-editarResponsavel'])):
    $nomeR = mysqli_escape_string($connect, $_POST['nomeR']);
    $nomeA = mysqli_escape_string($connect, $_POST['nomeA']);
    $gParentesco = mysqli_escape_string($connect, $_POST['gParentesco']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE responsaveis SET nome_responsavel = '$nomeR', nome_aluno = '$nomeA', grau_parentesco = '$gParentesco', email_responsavel = '$email' WHERE id_responsavel= '$id'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../tabelaResponsaveis.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao atualizar!";
        header('Location: ../tabelaResponsaveis.php');
    endif; 
    $connect->close();  
endif;

//editar cadastro de agendamento
if(isset($_POST['btn-editarAgendamento'])):
    $aluno_agendamento = mysqli_escape_string($connect, $_POST['aluno_agendamento']);
    $servidor_agendamento = mysqli_escape_string($connect, $_POST['servidor_agendamento']);
    $data_horario = mysqli_escape_string($connect, $_POST['data_horario']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE agendamentos SET aluno_agendamento = '$aluno_agendamento',
     servidor_agendamento = '$servidor_agendamento', 
     data_horario = '$data_horario' WHERE id_agendamento = '$id'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../tabelaAgendamentos.php?');
    else:
        $_SESSION ['mensagem'] = "Erro ao atualizar!";
        header('Location: ../tabelaAgendamentos.php');
    endif; 
    $connect->close();  
endif;
//editar atendimento
if(isset($_POST['btn-editar'])):
    $listNomeAluno = mysqli_escape_string($connect, $_POST['listNomeAluno']);
    $listNomeServidor = mysqli_escape_string($connect, $_POST['listNomeServidor']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $horarioI = mysqli_escape_string($connect, $_POST['horarioI']);
    $horarioT = mysqli_escape_string($connect, $_POST['horarioT']);
    $obs = mysqli_escape_string($connect, $_POST['obs']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE atendimento SET nome_aluno = '$listNomeAluno', nome_servidor = '$listNomeServidor', 
    data = '$data', hora_inicio = '$horarioI', hora_termino = '$horarioT', observacoes = '$obs'
    WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem']= "Atendimento atualizado com sucesso";
        header('Location: ../tabelaAtendimentos.php?');
    else:
        $_SESSION['mensagem']= "Erro ao atualizar";
        header('Location: ../tabelaAtendimentos.php?');

    endif;
endif;

?>
