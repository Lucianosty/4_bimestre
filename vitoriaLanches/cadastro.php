<?php
require_once 'funcoes.php';

 $conn = conectarBanco();

     
 if ($_SERVER['REQUEST_METHOD'] === 'POST') { //verificacao se ja foi feito um post
    $acao = $_POST['acao'] ?? '';
 
    if ($acao === 'criarCad') { //Se foi feito um post ele ta vendo qual acao ele ira fazer
        CadastroCliente($_POST ['nomeUsuario'], $_POST['senhaUsuario']);
    }
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

</style>

    <div class="h1"><h1>Bem vindo ao Vitoria Lanches! Por favor se cadastre para melhor experiência.</h1></div>
    <form method="post" action="indexverdadeiro.php?pagina=cadastro">
        <input type="hidden" name="acao" value="criarCad">

        <br>
        <div class="main"> Nome: <input type="text" placeholder="Digite seu nome" name="nomeUsuario">

        <br>

        Senha: <input type="text" placeholder="Digite sua senha" name="senhaUsuario">

        <br>
        <br></div>
        

        <center><button type="submit">Cadastrar</button></center>

    
</form>



</body>
</html>