<?php
    class Depositos{
    private $valor;
    private $meses;
    
    public function getValor() {
        return $this->valor;
    }
      public function setValor($value) {
        $this->valor = $value;
     } 
     
     public function getMeses() {
      return $this->meses;
    }
    public function setMeses($value) {
      $this->meses = $value;
    }
}
    class Poupança extends Depositos{
        public function CalcularPoupanca(){
            $taxaPoupanca = 0.007;
            return $this -> getValor() *pow(1 + $taxaPoupanca,$this->getMeses());
        }
    }

    class Fundo extends Depositos{
        public function CalcularFundo(){
            $taxaFundo = 0.0075;
            return $this -> getValor() *pow(1 + $taxaFundo,$this->getMeses());
        }
        
    }
?>