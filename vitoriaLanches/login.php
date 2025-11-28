<?php
require_once 'funcoes.php';

$conn = conectarBanco();
   
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nomeUsuario'] ?? '';
        $senha = $_POST['senhaUsuario'] ?? '';
        VerificarUser($nome, $senha);
   }
?>

<style>
    .h1{
        font-size:15px;
        text-align:center;
    }

    button{
        font-size:20px;
        background-color:#E69D05;
        font-weight: bold;
        width: 160px;
        height: 35px;
    }
    .main{
        text-align:center;
        font-size:30px;
        font-weight: bold;

    }
    form input[type="text"]{
        font-size:20px;
        font-weight:bold;

    }
    form input[type="password"]{
        font-size:20px;
        font-weight:bold;
    }

    .a{
        font-size:20px;
        text-align:center;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="h1"><h1>Que alegria te ver novamente por aqui!</h1></div>
    <div class="a">Insira seus dados e aproveite benefícios infinitos</div>
    <form method="post" action="login.php">
         <input type="hidden" value="logar">
        
        <br><br>

       <div class="main">Usuário: <input type="text" placeholder="Digite seu nome" name="nomeUsuario">

<br>
        Senha: <input type="password" placeholder="Digite sua senha" name="senhaUsuario"></div> 
<br><br>
        <center><button type="submit">Entrar</button></center>

</form>

</body>
</html>