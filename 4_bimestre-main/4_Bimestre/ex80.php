<?php

class Produto {

    private $nome;
    private $precoCusto;
    private $precoVenda;
    private $margemLucro;


    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function getPrecoCusto(){
        return $this->precoCusto;
    }
    public function setPrecoCusto($value){
        $this->precoCusto = $value;
    }

    public function getPrecoVenda(){
        return $this->precoVenda;
    }
    public function setPrecoVenda($value){
        if($value < $this->precoCusto){
            echo "<script>alert('Preço de venda não pode ser inferior ao preço de custo!');</script>";
        } else {
            $this->precoVenda = $value;
        }
    }

    public function getMargemLucro(){
        return $this->margemLucro;
    }


    public function calcularMargemLucro(){
        $this->margemLucro = $this->precoVenda - $this->precoCusto;
        return $this->margemLucro;
    }


    public function getMargemLucroPorcentagem(){
        if ($this->precoVenda == 0) return 0;
        return ($this->margemLucro / $this->precoVenda) * 100;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Encapsulamento</title>
</head>
<body>

<h1>Exercício Encapsulamento</h1>

<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite o nome do Produto">
    <input type="text" name="precoCusto" placeholder="Digite o valor do custo">
    <input type="text" name="precoVenda" placeholder="Digite o valor da venda">
    <input type="submit" value="Calcular">
</form>

<?php

if ($_POST) {

    $obj = new Produto();

    $obj->setNome($_POST['nome']);
    $obj->setPrecoCusto($_POST['precoCusto']);
    $obj->setPrecoVenda($_POST['precoVenda']);

    $margem = $obj->calcularMargemLucro();
    $percentual = $obj->getMargemLucroPorcentagem();

    echo "<h2>Resultado</h2>";
    echo "Produto: " . $obj->getNome() . "<br>";
    echo "Preço de Custo: R$ " . ($obj->getPrecoCusto(), 2, ',', '.') . "<br>";
    echo "Preço de Venda: R$ " . ($obj->getPrecoVenda(), 2, ',', '.') . "<br>";
    echo "Margem de Lucro: R$ " . ($margem, 2, ',', '.') . "<br>";
    echo "Margem em Porcentagem: " . ($percentual, 2) . "%<br>";
}

?>

</body>
</html>
