<?php
//sessão
session_start();
// conexao
require_once 'db_connect.php';

//deletar servidor
if(isset($_POST['btn-deletarServidor'])):
        $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM  servidores WHERE id_servidor = '$id' ";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Deletado com sucesso!";
        header('Location: ../tabelaServidores.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao deletar!";
        header('Location: ../tabelaServidores.php');
    endif;   
endif;

//deletar aluno
if(isset($_POST['btn-deletarAluno'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM  alunos WHERE id_aluno = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Deletado com sucesso!";
        header('Location: ../tabelaAlunos.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao deletar!";
        header('Location: ../tabelaAlunos.php');
    endif;   
endif;

//deletar responsavel
if(isset($_POST['btn-deletarResponsavel'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM responsaveis WHERE id_responsavel = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Deletado com sucesso!";
        header('Location: ../tabelaResponsaveis.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao deletar!";
        header('Location: ../tabelaResponsaveis.php');
    endif;   
endif;


//deletar agendamento
if(isset($_POST['btn-deletarAgendamento'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM agendamentos WHERE id_agendamento = '$id' ";

    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Deletado com sucesso!";
        header('Location: ../tabelaAgendamentos.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao deletar!";
        header('Location: ../tabelaAgendamentos.php');
    endif;   
endif;
//
if(isset($_POST['btn-deletar'])):

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM atendimento WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem']= "Atendimento deletado com sucesso";
        header('Location: ../tabelaAtendimentos.php?');
    else:
        $_SESSION['mensagem']= "Erro ao deletar";
        header('Location: ../tabelaAtendimentos.php?');

    endif;
endif;
?>