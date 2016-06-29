


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Acesso ao sistema</title>
    </head>
</html>
<?php

    //Acesso ao BadFunctionCallException
    require_once 'ConnectionMySQL/Connection.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Acesso ao Banco de dados
    // -- variaveis de conexao
    $db_server = "localhost";
    $db_username = "sispetshop";
    $db_password = "123456";
    $db_base = "petshop";

    $sql = "SELECT * FROM usuarios ".
            "WHERE login = '".$usuario."'".
            "AND senha = md5('".$senha."')";

    //echo $sql;

    $conexao = new Connection();
    $resultado = $conexao->execute($sql);

    if($resultado->num_rows == 0){
        echo "Usuário e/ou senha inválidos!";
        header("Location: login.php?erro=1");
    }else{
        header("Location: http://localhost/atividade2/menu?usuario=" . $usuario);

        echo "Acesso realizado com sucesso!</br>";

        //criando cookie. Perssistência
        session_start();

        echo"Sessão: ".session_id();
        echo"<br>Nome: ".session_name();

        $_SESSION['usuario'] = $usuario;
        $_SESSION['codigo'] = 9876;
        $_SESSION['petshop'] = 1;

        echo '<a href="http://localhost/atividade2/menu">Menu</a>';
    }

    die();

    //Recuperar/Validar as Informações
    if ($usuario != "admin" || $senha != "123"){
        //echo "<h1>Usuário e/ou senha inválidos !</h1>";
        header("location: http://localhost/atividade2/validar?erro=1");
    } else {
        echo "<h1>Seja  Bem-Vindo(a) $usuario !</h1>";
    }

    //Retornar
 ?>
