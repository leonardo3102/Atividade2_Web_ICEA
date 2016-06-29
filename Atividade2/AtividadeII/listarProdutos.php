<?php
session_start();
if(! isset($_SESSION['petshop'])){
    header("Location: login.php");
}
?>

<!-- templatemo 367 shoes -->
<!--
Shoes Template
http://www.templatemo.com/preview/templatemo_367_shoes
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Petshop Brasilisco</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<script type="text/javascript" src="js/jquery.min.js"></script>

</head>
 <body>
    <div id="site_title">
        <h1><a href="index.html">Pet Store Brasilisco</a></h1>
        <h3>Usuário: <?php echo $_SESSION['usuario'];?></h3>
    </div>
        <div id="header_right">
            <p>
            <a href="index.html">Home</a> | <a href="menu.php">Menu</a> | <a href="sair.php">Sair</a>
        </div>
    <div class="cleaner"></div>
     </br></br>
 </body>
 </html>
  <?php
//  $usuario = $_POST['usuario'];
  //$senha = $_POST['senha'];

  // Acesso ao Banco de dados

    require_once 'Connection.php';



//$sql = "SELECT * FROM usuarios" . " WHERE login = ' . $usuario . ' " . "AND senha = md5 ('" . $senha ."')";

//echo $sql;

  // -- variaveis de conexao
  $db_server = "localhost";
  $db_username = "sispetshop";
  $db_password = "123456";
  $db_base = "petshop";

  // -- conexao
  $connection = new mysqli($db_server, $db_username,
                  $db_password, $db_base);

  if($connection->connect_errno) {
    echo "Falha na conexão com o Banco de Dados! " . $connection->connect_errno . " - " . $connection->connect_error;
  }
//else {
  //  echo "Conexão com realizada com sucesso!";
//  }

  $sql = "SELECT * FROM produtos";
  $result = $connection->query($sql);
  //var_dump($result->fetch_all());

echo "<table class='table table-striped table-bordered' >";

echo "<tr>";

echo "<td>" . "<h3>Nome do produto</h3>" . "</td><td>" . "<h3>preço</h3>" . "</td><td>" . "<h3>local da imagem</h3>" . "</td>" ;

echo "</tr>";

  while($row = $result->fetch_assoc()) {


      echo "<tr>";

      echo "<td>" . $row["nome"] . "</td><td>" . $row["preco"] . "</td><td>" . $row["imagem"] . "</td>" ;

      echo "</tr>";



  }
echo "</table>";

  die();

  // Recuperar/validar as informações

  if ($usuario != "admin" || $senha != "123") {
    //echo "<h1>Usuario e/ou senha inválidos !</h1>";
    header("Location: login.php?erro=1");
  }
  else {
    echo "<h1>Seja bem-vindo(a) $usuario !</h1>";
  }
  // Retornar
 ?>
