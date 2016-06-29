<?php
session_start();
if(! isset($_SESSION['petshop'])){
    header("Location: http://localhost/atividade2/login");
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
<title>Menu</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap.min.css">

</script>

</head>
 <body>
    <div id="site_title">
        <h1><a href="http://localhost/atividade2/brasilisco">Pet Store Brasilisco</a></h1>
        </br></br></br>
        <h1>Seja bem vindo!</h1>
        <h3>Usuário: <?php echo $_SESSION['usuario'];?></h3>
    </div>
        <div id="header_right">
            <p>
            <a href="http://localhost/atividade2/brasilisco">Home</a> | <a href="http://localhost/atividade2/produtos">Listar produtos</a> | <a href="http://localhost/atividade2/sair">Sair</a>
        </div>
    <div class="cleaner"></div>
     </br></br>
 </body>
 </html>
