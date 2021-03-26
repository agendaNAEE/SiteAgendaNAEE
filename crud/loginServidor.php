<?php
require_once '../crud/php_action/db_connect.php';

session_start();

if(isset($_POST['btn-entrar'])){
    $erros = array();
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($email) or empty($senha)){
        $erros[] = "<li>O campo login senha deve ser preenchido</li>";
    }else{

        $sql = "SELECT email_servidor FROM servidores WHERE email_servidor = '$email'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado)>0){
           $senha = md5($senha);
            $sql = "SELECT * FROM servidores WHERE email_servidor = '$email' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id_servidor'];
                header('Location: telaServidor.php');
            }else{
                $erros[] = "<li> Usuário e senha não conferem </li>";
            }


        }else{
            $erros[] = "<li> Usuário inexistente</li>";
        }
    }
}
?>
<html lang="en">

<head>
    <?php
        //header
        include_once 'includes/header.php';
        //footer
        include_once 'includes/footer.php';
    ?>
</head>

<body>
    <div class="container">
    <h2>Login</h2>
    <?php
      
        if(!empty($erros)){
            foreach($erros as $erro){
                echo $erro;
            }
        }
    ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
            <button type="submit" class="btn btn-primary" name="btn-entrar">Login</button>
        </form>
    </div>

</body>

</html>