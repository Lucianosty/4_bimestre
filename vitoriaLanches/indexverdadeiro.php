<?php
include_once 'funcoes.php';

$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
?>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitoria Lanches</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>

<style>

body{
    font-family: 'Roboto', sans-serif;
    background-color: #D9D9D9;
    color: #000000;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}


header {
    background-color: #E69D05;
    padding: 25px 0;
    font-size: 25px;
    border-bottom: 3px solid #000;
}

header ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 30px;
}

header ul li a {
    text-decoration: none;
    color: black;
    font-weight: bold;
    padding: 8px 15px;
    border-radius: 5px;
}

header ul li a:hover {
    background-color: #333;
    color: white;
}


main {
    flex: 1;
    padding: 40px 20px;
    max-width: 900px;
    margin: 0 auto;
    background-color: #D9D9D9;
    font-size: 20px;
}

main h2 {
    color: #ff6600;
    margin-bottom: 20px;
}

/* Rodapé */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 6px 0;
    font-size: 20px;
    border-top: 3px solid #000;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
}

</style>

<header>
<ul>
    <li><a href="indexverdadeiro.php?pagina=cadastro">Cadastrar</a></li>
    <li><a href="indexverdadeiro.php?pagina=login">Entrar</a></li>

    <?php
    if ($tipo == 'administrador') {
        echo '<li><a href="#">Gerenciar pedidos</a></li>';
        echo '<li><a href="#">Relatórios</a></li>';
        echo '<li><a href="indexverdadeiro.php?pagina=gerenciarProd">Gerenciar produtos</a></li>';
        echo '<li><a href="#">Clientes</a></li>';
    } else{
        echo "<li><a href='indexverdadeiro.php?pagina=fazerPedidoFalso'>Fazer pedido</a></li>";
    }
    ?>
</ul>
</header>

<main>
<?php
if (isset($_GET['pagina'])) {
$pagina = $_GET['pagina'] . '.php';
if (file_exists($pagina)) {
include($pagina);
} else {
echo "<p>Página não encontrada.</p>";
}
} else {
echo "<h2>Bem-vindo ao Vitoria Lanches!</h2>
<p> Escolha uma opção no menu acima.</p>";
}
?>
</main>

<footer>
<p>&copy;2025 VitoriaLanches. All rights reserved </p>
</footer>

</body>
</html>
