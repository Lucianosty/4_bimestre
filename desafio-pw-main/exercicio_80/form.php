<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "nomeProd" placeholder="Digite o nome do produto">
        <input type="text" name = "precoCusto" placeholder="Digite o custo do produto">
        <input type="text" name = "precoVenda"placeholder="Digite o preco de venda">

        <input type="submit" value="enviar">

    </form>

    <?php 
    if($_POST){
        $nomeProduto = $_POST['nomeProd'];
        $precoCusto = $_POST['precoCusto'];
        $precoVenda = $_POST['precoVenda'];

        require_once 'exercicioEncap.php';

        $margemLucro = 

        $produto = new Produto();
        
        $produto -> setNome($nomeProduto);
        $produto -> setPrecoCusto($precoCusto);
        $produto -> setPrecoVenda($precoVenda);

        echo "<br>";
      
        echo "Nome do produto: ". $produto -> getNome() ;
        echo "<br>Custo do produto: ".$produto -> getPrecoCusto();
        echo "<br>Preco de venda do produto: ".$produto -> getPrecoVenda();
        echo "<br>Margem de lucro: ". $produto -> calcularMargemLucro();
        echo "<br>Margem de lucro em porcentagem: ". $produto->getMargemLucroPorcentagem()."%";
    }
    ?>
    
</body>
</html>