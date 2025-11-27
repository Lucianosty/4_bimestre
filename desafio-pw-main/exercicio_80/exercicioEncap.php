<?php
    class Produto{
    private $nome;
    private $precoCusto;
    private $precoVenda;
    private $margemLucro;

        

    public function getNome() {
      return $this->nome;
    }
    public function setNome($value) {
      $this->nome = $value;
    }

    public function getPrecoCusto() {
      return $this->precoCusto;
    }
    public function setPrecoCusto($value) {
      
        $this->precoCusto = $value;
        
    }

    public function getPrecoVenda() {
      return $this->precoVenda;
    }
    public function setPrecoVenda($value) {
      if($this->precoCusto < $value){
      
        $this->precoVenda = $value;
    }else{
        echo "O preco da venda não pode ser inferior ao preco da compra";
    }    
}

    public function getMargemLucro() {
      return $this->margemLucro;
    }
    public function setMargemLucro() {
      $calculo = $this ->calcularMargemLucro();
      $this->margemLucro = $calculo;
    }

    public function calcularMargemLucro(){
           $calculo= $this ->margemLucro = $this->precoVenda - $this -> precoCusto;
           return $calculo;
        
      
     }

    public function getMargemLucroPorcentagem(){
        if(($this->precoCusto < $this-> precoVenda)){
            return ($this -> margemLucro /$this->precoVenda)*100;   
        }else{
            echo "<script>";    
            echo "alert('Não pode ser dividido por 0 ou o custo ser maior que o preço de venda') ";
            echo "</script>";
        }
        
    }
    }
?>