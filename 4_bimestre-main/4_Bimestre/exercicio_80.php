<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercício Encapsulamento</h1>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite o nome do Produto">
        <input type="text" name="precoCusto" placeholder="Digite o valor do custo do Produto">
        <input type="text" name="precoVenda" placeholder="Digite o valor da venda do Produto">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php

class Produto { 
    private $nome;
    private $precoCusto;
    private $precoVenda;
    private $margemLucro;

    public function getNome(){
        return $this->$nome;
    }
    public function setNome(){
        $this->$nome = $value;
    }
    public function getPrecoCusto(){
        $this->$precoCusto;
    }
    public function setPrecoCusto(){
        $this->$precoCusto = $value;
    }
    public function getPrecoVenda(){
        $this->$precoVenda;
    }
    public function setPrecoVenda(){
        if ($this->$precoVenda > $this->$precoCusto ) {
            $this->$precoVenda = $value;
        }
        else{
            echo "<script>";
            echo "alert('Preço de venda inferior ao preço da compra!')";
            echo "</script>";
        }
  
    }
    public function getMargemLucro(){
        $this->$margemLucro;
    }
    public function setMargemLucro(){
        $this->$margemLucro = $value;
    }
}

    public function calcularMargemLucro(){
        $this->$PrecoVenda - $this->$PrecoCusto;
        return $margemLucro;
    }

    public function getMargemLucroPorcentagem(){
        ($this->$margemLucro / $this->PrecoVenda) * 100;

    }

    
?>
