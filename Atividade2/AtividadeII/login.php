<!--//criar um arquivo menu.php onde só é possível acessar se passar por login e validação
//menu deve ter um botão de sair
//Personalizar com bootstrape-->


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Acesso ao sistema</title>
    </head>
    <body>
        <form action="validar.php" method="post">
            <input type="text" name="usuario" />
            <input type="password" name="senha" />
            <input type="submit" name="validar" value="Acessar">
        </form>
        <?php
            if(isset($_GET['erro'])){
                if($_GET['erro'] == 1){
                    echo "Usuário e/ou senha inválidas!";
                }
            }
         ?>
    </body>
</html>
