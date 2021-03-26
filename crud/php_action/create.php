<?php

// conexao
require_once 'db_connect.php';

// cadastro de servidor
if(isset($_POST['btn-cadastrarServidor'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $funcao = mysqli_escape_string($connect, $_POST['funcao']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $sql = "INSERT INTO servidores (nome_servidor, funcao, email_servidor, senha) VALUES('$nome', '$funcao', '$email', MD5('$senha'))";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../tabelaServidores.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../tabelaServidores.php');
    endif;   
    $connect->close();
endif;

//cadastro alunos
if(isset($_POST['btn-cadastrarAluno'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $ra = mysqli_escape_string($connect, $_POST['ra']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $curso = mysqli_escape_string($connect, $_POST['curso']);
    $periodo_ano = mysqli_escape_string($connect, $_POST['periodo_ano']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    

    $sql = "INSERT INTO alunos (nome_aluno, ra, email_aluno, curso, periodo_ano, senha_aluno) VALUES('$nome', '$ra', '$email', '$curso', '$periodo_ano', MD5('$senha'))";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../tabelaAlunos.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../tabelaAlunos.php');
    endif;   
    $connect->close();
endif;

//cadastro agendamento
if(isset($_POST['btn-cadastrarAgendamento'])):
    $aluno_agendamento = mysqli_escape_string($connect, $_POST['nomeAluno']);
    $servidor_agendamento = mysqli_escape_string($connect, $_POST['nomeServidor']);
    $data_horario = mysqli_escape_string($connect, $_POST['data_horario']);
    

    $sql = "INSERT INTO agendamentos (aluno_agendamento, servidor_agendamento, data_horario) VALUES('$aluno_agendamento', '$servidor_agendamento' , '$data_horario')";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../tabelaAgendamentos.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../tabelaAgendamentos.php?');
    endif;   
    $connect->close();
endif;

//cadastro responsável
if(isset($_POST['btn-cadastrarResponsavel'])):
    $nomeR = mysqli_escape_string($connect, $_POST['nomeR']);
    $nomeA = mysqli_escape_string($connect, $_POST['nomeA']);
    $gParentesco = mysqli_escape_string($connect, $_POST['gParentesco']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $sql = "INSERT INTO responsaveis (nome_responsavel, nome_aluno, grau_parentesco, email_responsavel, senha_responsavel) VALUES('$nomeR', '$nomeA',' $gParentesco', '$email', MD5('$senha'))";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION ['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../tabelaResponsaveis.php');
    else:
        $_SESSION ['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../tabelaResponsaveis.php');
    endif;   
    $connect->close();
endif;

//cadastro atendimento
if(isset($_POST['btn-cadastrarAtendimento'])):
    $listNomeAluno = mysqli_escape_string($connect, $_POST['listNomeAluno']);
    $listNomeServidor = mysqli_escape_string($connect, $_POST['listNomeServidor']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $horarioI = mysqli_escape_string($connect, $_POST['horarioI']);
    $horarioT = mysqli_escape_string($connect, $_POST['horarioT']);
    $obs = mysqli_escape_string($connect, $_POST['obs']);

    $sql = "INSERT INTO atendimento (nome_aluno, nome_servidor, data, hora_inicio, hora_termino, observacoes) VALUES ('$listNomeAluno','$listNomeServidor','$data','$horarioI','$horarioT','$obs')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem']= "Atendimento cadastrado com sucesso";
        
    else:
        $_SESSION['mensagem']= "Erro ao cadastrar";
        

    endif;
    header('Location: ../tabelaAtendimentos.php');
endif;
?>